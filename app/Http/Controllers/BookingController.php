<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Theatre;
use App\Models\Slot;
use App\Models\EventType; // Added EventType model
use \App\Models\Addon;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    public function index()
    {
        $theatres = Theatre::all();
        $eventTypes = EventType::all(); // Fetch all event types
        $addons = Addon::all(); // fetch all add ons
        return view('booking', compact('theatres', 'eventTypes', 'addons')); // Pass event types and addons to the view
    }

    public function getAvailableSlots(Request $request)
    {
        $request->validate([
            'theatre_id' => 'required|exists:theatres,id',
            'booking_date' => 'required|date',
        ]);

        $theatre_id = $request->theatre_id;
        $booking_date = $request->booking_date;

        $theatre = Theatre::findOrFail($theatre_id);
        $allTheatreSlots = $theatre->slots()->get(['time_slot', 'start_time', 'end_time']); // Fetch end_time


        $bookedSlots = Booking::where('theatre_name', $theatre->name)
            ->where('booking_date', $booking_date)
            ->pluck('slot')
            ->toArray();

        $availableSlots = [];
        $timezone = 'Asia/Kolkata';
        $currentTime = now($timezone);
        $selectedDate = \Carbon\Carbon::parse($booking_date, $timezone);

        foreach ($allTheatreSlots as $slot) {
            // Apply time-based filtering only for today's date
            if ($selectedDate->isSameDay($currentTime)) {
                // When parsing, specify that the time belongs to the target timezone
                $slotEndTime = \Carbon\Carbon::parse($booking_date . ' ' . $slot->end_time, $timezone);

                if ($currentTime->greaterThan($slotEndTime)) {
                    continue; // Skip this slot if its end time has passed
                }
            }

            $availableSlots[] = [
                'slot' => $slot->time_slot,
                'start_time' => $slot->start_time,
                'available' => !in_array($slot->time_slot, $bookedSlots),
            ];
        }

        return response()->json($availableSlots);
    }


    public function createOrder(Request $request)
    {
        \Log::info('CREATE ORDER HIT', $request->all());

        $request->validate([
            'theatre_id' => 'required|exists:theatres,id',
            'addons' => 'nullable|array', // expect array of addon IDs
            'addons.*' => 'exists:addons,id',
            'payment_type' => 'required|in:full,partial',
        ]);

        $theatre = Theatre::findOrFail($request->theatre_id);

        // Start with theatre offer price
        $totalAmount = $theatre->offer_price;

        $selectedAddons = [];

        // If any addons are selected, add their prices
        if ($request->has('addons')) {
            $addons = Addon::whereIn('id', $request->addons)->get();

            foreach ($addons as $addon) {
                $totalAmount += $addon->price;
                $selectedAddons[] = $addon->name;
            }
        }

        $amountToPay = $totalAmount;
        if ($request->payment_type === 'partial') {
            $amountToPay = 300; // Partial payment of ₹300
        }

        $amountInPaise = round($amountToPay * 100); // Razorpay expects amount in paise

        $api = new Api(
            config('services.razorpay.key'),
            config('services.razorpay.secret')
        );

        $order = $api->order->create([
            'amount'   => $amountInPaise,
            'currency' => 'INR',
            'receipt'  => 'booking_' . time(),
            'notes' => [
                'total_amount' => $totalAmount
            ]
        ]);

        return response()->json([
            'id'       => $order->id,
            'amount'   => $order->amount,
            'currency' => $order->currency,
            'addons'   => $selectedAddons, // optional, for debugging
            'total'    => $totalAmount,     // optional, for client-side display
            'paid_amount' => $amountToPay
        ]);
    }

    public function store(Request $request)
    {
        \Log::info('Razorpay verify payload', $request->all());
        
        try {
            $api = new Api(
                config('services.razorpay.key'),
                config('services.razorpay.secret')
            );

            $api->utility->verifyPaymentSignature([
                'razorpay_order_id'   => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature'  => $request->razorpay_signature,
            ]);

            // Get theatre
            $theatre = Theatre::findOrFail($request->theatre_id);

            // Prevent double booking
            $existingBooking = Booking::where('theatre_name', $theatre->name)
                ->where('booking_date', $request->booking_date)
                ->where('slot', $request->slot)
                ->first();

            if ($existingBooking) {
                return response()->json([
                    'success' => false,
                    'message' => 'Slot already booked'
                ], 409);
            }

            // Create booking
            $booking = Booking::create([
                'name'        => $request->name,
                'email'       => $request->email,
                'phone'  => $request->contact_no,

                'theatre_name' => $theatre->name,

                'booking_date' => $request->booking_date,
                'slot'         => $request->slot,
                'purpose'      => $request->purpose,
                'addon'        => $request->addon,
                'total_price'  => $request->total_price,

                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_order_id'   => $request->razorpay_order_id,
                'razorpay_signature'  => $request->razorpay_signature,
            ]);

            return response()->json([
                'success' => true,
                'booking_id' => $booking->id
            ]);

        } catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
            return response()->json([
                'success' => false,
                'message' => 'Payment verification failed'
            ], 400);
        }
    }

    public function success(Request $request)
    {
        $booking = Booking::findOrFail($request->booking_id);

        return view('booking-success', compact('booking'));
    }

    public function failed()
    {
        return view('booking-failed');
    }


    public function downloadReceipt($id)
    {
        $booking = Booking::find($id);
        $api = new Api(
            config('services.razorpay.key'),
            config('services.razorpay.secret')
        );
        $order = $api->order->fetch($booking->razorpay_order_id);

        $total_price = $order->notes['total_amount'] ?? $booking->total_price;
        $paid_amount = $booking->total_price;
        $due_amount = $total_price - $paid_amount;

        $fileName = 'receipt-' . $booking->razorpay_payment_id . '.pdf';
        $pdf = Pdf::loadView('receipt', compact('booking', 'total_price', 'paid_amount', 'due_amount'));
        return $pdf->download($fileName);
    }
}

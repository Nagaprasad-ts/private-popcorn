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
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    public function index()
    {
        $theatres = Theatre::all();
        $eventTypes = EventType::all(); // Fetch all event types
        return view('booking', compact('theatres', 'eventTypes')); // Pass event types to the view
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
        $allTheatreSlots = $theatre->slots()->pluck('time_slot')->toArray();


        $bookedSlots = Booking::where('theatre_name', $theatre->name)
            ->where('booking_date', $booking_date)
            ->pluck('slot')
            ->toArray();

        $availableSlots = [];
        foreach ($allTheatreSlots as $slot) {
            $availableSlots[] = [
                'slot' => $slot,
                'available' => !in_array($slot, $bookedSlots),
            ];
        }

        return response()->json($availableSlots);
    }


    public function createOrder(Request $request)
    {
        \Log::info('CREATE ORDER HIT', $request->all());

        $request->validate([
            'theatre_id' => 'required|exists:theatres,id'
        ]);

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'contact_no' => 'required|string|min:10|max:10',
        //     'email' => 'required|email',
        // ]);

        $theatre = Theatre::findOrFail($request->theatre_id);

        $amount = $theatre->offer_price * 100; // paise

        $api = new Api(
            env('RAZORPAY_KEY'),
            env('RAZORPAY_SECRET')
        );

        $order = $api->order->create([
            'amount'   => $amount,
            'currency' => 'INR',
            'receipt'  => 'booking_' . time()
        ]);

        return response()->json([
            'id'       => $order->id,
            'amount'   => $order->amount,
            'currency' => $order->currency
        ]);
    }


    public function store(Request $request)
    {
        \Log::info('Razorpay verify payload', $request->all());
        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

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
        $booking = Booking::find($request->booking_id);
        return view('booking-success', compact('booking'));
    }


    public function failed()
    {
        return view('booking-failed');
    }


    public function downloadReceipt($id)
    {
        $booking = Booking::find($id);
        $pdf = Pdf::loadView('receipt', compact('booking'));
        return $pdf->download('receipt-booking-'.$id.'.pdf');
    }
}

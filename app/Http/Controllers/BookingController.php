<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Barryvdh\DomPDF\Facade\Pdf;


use App\Models\Theatre;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    private $slots = [
        'Morning (10 AM - 1 PM)',
        'Afternoon (2 PM - 5 PM)',
        'Evening (6 PM - 9 PM)',
        'Late Night (10 PM - 1 AM)',
    ];

    public function index()
    {
        $theatres = Theatre::all();
        return view('booking', compact('theatres'));
    }

    public function getAvailableSlots(Request $request)
    {
        $request->validate([
            'theatre_id' => 'required|exists:theatres,id',
            'booking_date' => 'required|date',
        ]);

        $theatre_id = $request->theatre_id;
        $booking_date = $request->booking_date;

        // Get the theatre name for querying existing bookings
        $theatre = Theatre::findOrFail($theatre_id);

        $bookedSlots = Booking::where('theatre_name', $theatre->name)
            ->where('booking_date', $booking_date)
            ->pluck('slot')
            ->toArray();

        $availableSlots = [];
        foreach ($this->slots as $slot) {
            $availableSlots[] = [
                'slot' => $slot,
                'available' => !in_array($slot, $bookedSlots),
            ];
        }

        return response()->json($availableSlots);
    }


    public function createOrder(Request $request)
    {
        $theatre = Theatre::find($request->theatre_id);

        $api = new Api(
            env('RAZORPAY_KEY'),
            env('RAZORPAY_SECRET')
        );


        $order = $api->order->create([
            'amount' => $theatre->offer_price * 100,
            'currency' => 'INR'
        ]);


        return response()->json($order);
    }


    public function store(Request $request)
    {
        // Prevent dual bookings
        $existingBooking = Booking::where('theatre_name', $request->theatre_name)
                                    ->where('booking_date', $request->booking_date)
                                    ->where('slot', $request->slot)
                                    ->first();

        if ($existingBooking) {
            throw ValidationException::withMessages([
                'slot' => 'This slot is already booked for the selected theatre and date. Please choose another slot.',
            ]);
        }

        $booking = Booking::create([
            'theatre_name' => $request->theatre_name,
            'booking_date' => $request->booking_date,
            'slot' => $request->slot,
            'purpose' => $request->purpose,
            'addon' => $request->addon,
            'total_price' => $request->total_price,
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'razorpay_order_id' => $request->razorpay_order_id,
            'razorpay_signature' => $request->razorpay_signature,
        ]);
        return response()->json(['success' => true, 'booking_id' => $booking->id]);
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

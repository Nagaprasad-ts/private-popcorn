<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Barryvdh\DomPDF\Facade\Pdf;


class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }


    public function createOrder(Request $request)
    {
        $api = new Api(
            env('RAZORPAY_KEY'),
            env('RAZORPAY_SECRET')
        );


        $order = $api->order->create([
            'amount' => 1200 * 100, // Fixed price
            'currency' => 'INR'
        ]);


        return response()->json($order);
    }


    public function store(Request $request)
    {
        $booking = Booking::create($request->all());
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

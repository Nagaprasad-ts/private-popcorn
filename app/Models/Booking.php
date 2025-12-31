<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    protected $fillable = [
        'theatre_name',
        'booking_date',
        'slot',
        'purpose',
        'addon',
        'total_price',
        'razorpay_payment_id',
        'razorpay_order_id',
        'razorpay_signature'
    ];
}

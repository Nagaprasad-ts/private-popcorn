<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


use App\Models\EventType;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'theatre_id',
        'theatre_name',
        'booking_date',
        'slot',
        'purpose',
        'addon',
        'total_price',
        'razorpay_payment_id',
        'razorpay_order_id',
        'razorpay_signature',
    ];

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }
}


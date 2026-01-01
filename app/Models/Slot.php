<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $fillable = [
        'theatre_id',
        'time_slot',
        'start_time',
        'end_time',
    ];

    public function theatre()
    {
        return $this->belongsTo(Theatre::class);
    }
}

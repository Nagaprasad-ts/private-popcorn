<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    protected $fillable = [
        'name',
        'description',
        'base_price',
        'offer_price',
    ];
}

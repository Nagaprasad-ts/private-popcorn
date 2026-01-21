<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'keywords',
    ];

    protected $casts = [
        'keywords' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

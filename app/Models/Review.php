<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'google_h',
        'google_r',
        'facebook_h',
        'facebook_r',
    ];

    protected $table='reviews';
}

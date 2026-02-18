<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Othotha extends Model
{
    protected $fillable = [
        'prothom',
        'ditio',
        'tritio'
    ];

    protected $table='othothas';
}

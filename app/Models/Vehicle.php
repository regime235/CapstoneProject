<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_driver',
        'vehicle_type',
        'vehicle_color',
        'vehicle_plateNumber',
        'vehicle_destination',
        'trackerNumber',
        'vehicle_date',

    ];
}

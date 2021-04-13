<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tracker extends Model
{
    use HasFactory;

    protected $fillable = [
        'trackerNumber',
        'latitude',
        'longitude',
        'map',
        'log_id',
        'created_at',
        'updated_at'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class report extends Model
{
    use HasFactory;

    protected $fillable = [
        'log_id',
        'time_in',
        'time_out',
        'duration',
        'name',
        'tracker_id',
        'created_at',
        'updated_at'
    ];
}
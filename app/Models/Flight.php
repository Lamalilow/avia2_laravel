<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_city_id',
        'end_city_id',
        'start_time',
        'end_time',
        'airplane_id',
    ];
}

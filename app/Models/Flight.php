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

    public function start_city()
    {
        return $this->hasOne(City::class, 'id', 'start_city_id')->first()->name;
    }
    public function end_city()
    {
        return $this->hasOne(City::class, 'id', 'end_city_id')->first()->name;
    }
    public function airplane()
    {
        return $this->hasOne(Airplane::class, 'id', 'airplane_id')->first()->name;
    }

}

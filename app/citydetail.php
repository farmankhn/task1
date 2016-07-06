<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citydetail extends Model
{
    	protected $fillable = [
        'city_name',
        'obs_time',
        'temp',
        'weather_code',
        'description'
    ];
}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interval extends Model
{
	public function bookings()
    {
        return $this->hasMany('Booking');
    }
}

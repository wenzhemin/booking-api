<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function interval()
    {
        return $this->belongsTo('App\Interval');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function rentBikes()
    {
    	return $this->hasMany(RentBike::class);
    }
}

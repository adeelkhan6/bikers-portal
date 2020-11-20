<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentOrder extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function address()
    {
    	return $this->belongsTo(Address::class);
    }

     public function rentBike()
    {
    	return $this->belongsTo(RentBike::class);
    }
}

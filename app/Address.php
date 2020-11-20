<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    public function rentOrders()
    {
    	return $this->hasMany(RentOrder::class);
    }

    public function Orders()
    {
    	return $this->hasMany(Order::class);
    }
}

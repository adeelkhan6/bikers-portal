<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function address()
    {
    	return $this->belongsTo(Address::class);
    }

    public function orderDetails()
    {
    	return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
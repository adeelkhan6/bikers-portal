<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = [];

    public function Order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}

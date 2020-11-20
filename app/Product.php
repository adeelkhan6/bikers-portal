<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function subCategory()
    {
    	return $this->belongsTo(SubCategory::class);
    }

    public function productCategory()
    {
    	return $this->belongsTo(ProductCategory::class);
    }

    public function orderDetails()
    {
    	return $this->hasMany(OrderDetail::class);
    }
}

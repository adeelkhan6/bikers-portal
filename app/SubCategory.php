<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded = [];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function productCategory()
    {
    	return $this->belongsTo(ProductCategory::class);
    }
}

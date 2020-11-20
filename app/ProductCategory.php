<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function subCategories()
    {
    	return $this->hasMany(SubCategory::class);
    }
}
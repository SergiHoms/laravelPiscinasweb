<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $with = ['categories', 'prices'];
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(ProductCategory::class)->where('active', 1);
    }

    public function prices()
    {
        return $this->hasMany(Price::class, 'product_id')->where('active', 1);-where('valid', 1);
    }

    // public function scopePrice($query, $price)
    // {
    //     return $query->where('price','like', "%$price%");
    // }

    

}
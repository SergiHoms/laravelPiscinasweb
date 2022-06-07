<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $with = ['categories'];
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(ProductCategory::class);
    }

}
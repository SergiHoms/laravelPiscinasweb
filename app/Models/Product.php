<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';
    protected $with = ['categories'];

    public function categories()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    
}
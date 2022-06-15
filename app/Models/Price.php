<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    // protected $table = 'prices';
    protected $with = ['taxes','products'];
    protected $guarded = [];

    public function taxes()
    {
        return $this->belongsTo(Taxe::class, 'tax_id')->where('active', 1);
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'category_id')->where('active', 1)->where('valid', 1);
    }
}
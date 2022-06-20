<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    // protected $table = 'prices';
    protected $guarded = [];

    public function taxes()
    {
        return $this->belongsTo(Taxe::class, 'tax_id')->where('active', 1);
    }

    public function product()
    {
        return $this->belongsTo(Product::class)->where('active', 1);
    }
}
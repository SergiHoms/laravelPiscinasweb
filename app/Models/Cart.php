<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function clients()
    {
        return $this->belongTo(Client::class);
    }

    public function sales()
    {
        return $this->belongTo(Cart::class)->where('active', 1);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $guarded = [];

    public function price()
    {
        return $this->belongsTo(Price::class)->where('active', 1)->where('valid', 1);
    }

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    public function fingerprint()
    {
        return $this->belongsTo(Fingerprint::class);
    }

    public function sales()
    {
        return $this->belongsTo(Cart::class)->where('active', 1);
    }
}
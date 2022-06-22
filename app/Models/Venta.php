<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    // protected $table = 'ventas';
    protected $with = ['clients', 'payment_methods','carts'];
    protected $guarded = [];

    public function clients()
    {
        return $this->belongsTo(Client::class, )->where('active', 1);
    }

    public function payment_methods()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id')->where('active', 1);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class,)->where('active', 1);
    }
}
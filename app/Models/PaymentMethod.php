<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';
    protected $with = ['ventas'];
    protected $guarded = [];

    public function ventas()
    {
        return $this->hasMany(Venta::class,'payment_method_id',)->where ('active', 1);
    }
}
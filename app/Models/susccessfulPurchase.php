<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessfulPurchase extends Model
{
    protected $guarded = [];


    public function venta()
    {
        return $this->belongsTo(Venta::class, 'ticket_number');
    }
}
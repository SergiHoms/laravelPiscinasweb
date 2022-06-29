<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];
    
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'customer_id');
    }

    public function fingerprints()
    {
        return $this->hasMany(fingerprint::class, 'customer_id');
    }
}



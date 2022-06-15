<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $with = ['ventas', 'fingerprints'];
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


// ->where('active', 1)
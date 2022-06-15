<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $with = ['prices','fingerprints','clients','sales'];
    protected $guarded = [];

    public function prices()
    {
        return $this->belongsTo(Price::class,)->where('active', 1)->where('valid',1);
    }

    public function fingerprints()
    {
        return $this->hasMany(Fingerprint::class);
    }

    public function clients()
    {
        return $this->belongTo(Client::class);
    }

    public function sales()
    {
        return $this->belongTo(Cart::class,)->where('active', 1);
    }
}
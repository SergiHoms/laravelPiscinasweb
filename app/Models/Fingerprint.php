<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    // protected $table = 'fingerprints';
    protected $with = ['clients'];
    protected $guarded = [];

    public function clients()
    {
        return $this->belongsTo(Client::class, '')->where('active', 1);
    }
}
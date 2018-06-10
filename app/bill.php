<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $fillable = [
        'client_id','total',
    ];

     public function client()
    {
        return $this->belongsTo(client::class);
    }

}

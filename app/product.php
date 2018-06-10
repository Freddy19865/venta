<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
       'client_id', 'name','stock','precio',
    ];

     public function client()
    {
        return $this->belongsTo(client::class);
    }
}

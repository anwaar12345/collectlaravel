<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storecollections extends Model
{
    //



    public function mycomputer()
    {
        return $this->belongsTo('App\User','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    //reverser one to one relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}

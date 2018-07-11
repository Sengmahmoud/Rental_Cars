<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    
    public function customers()
    {
       return $this->hasMany('App\Customer','agency_id');
    }
    public function cars()
    {
        return $this->hasMany('App\Car','agency_id');
    }
}

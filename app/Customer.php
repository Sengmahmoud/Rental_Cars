<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','phone','address'];

    public function agencies()
    {
        return $this->belongsTo('App\Agency');
    }
    public function cars()
    {
        return $this->hasMany('App\Car','customer_id');
    }
}

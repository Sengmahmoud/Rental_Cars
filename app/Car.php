<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable=['type','number','customer_id','rental_start_date','rental_return_date','agancy_id'];
    public function agencies()
    {
        return $this->belongsTo('App\Agency');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}

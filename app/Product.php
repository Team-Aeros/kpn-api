<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name'];


    public function subscriptions() {
        return $this->hasMany('App\Subscription');
    }

    public function subscription() {
        return $this->hasOne('App\Subscription');
    }
}

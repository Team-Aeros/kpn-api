<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    protected $fillable = ['name', 'interval', 'price', 'discount_id'];

    public function discount() {
        return $this->hasOne('App\Discount');
    }

    public function subscription() {
        return $this->belongsTo('App\Subscription');
    }

    public function subscriptions() {
        return $this->belongsToMany('App\Subscription');
    }
}

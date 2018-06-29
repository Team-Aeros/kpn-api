<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function product() {
        return $this->hasOne('App\Product');
    }

    public function priceplan() {
        return $this->hasOne('App\PricePlan');
    }

    public function invoices() {
        return $this->belongsToMany('App\Invoice');
    }
}

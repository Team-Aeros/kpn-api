<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;


class Customer extends Model
{
    use Billable;

    public function subscription()
    {
        return $this->hasOne('App\Subscription');
    }

    public function subscriptions()
    {
        return $this->hasMany('App\Subscription');
    }
}

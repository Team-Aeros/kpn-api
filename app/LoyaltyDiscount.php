<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoyaltyDiscount extends Model
{
    public function discounts() {
        return $this->morphTo('App\Discount', 'discountable');
    }
}

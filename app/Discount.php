<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function loyaltyDiscounts() {
        return $this->morphedByMany('App\LoyaltyDiscount', 'discountable');
    }

    public function productDiscounts() {
        return $this->morphedByMany('App\ProductDiscount', 'discountable');
    }

    public function happyHourDiscounts() {
        return $this->morphedByMany('App\HappyHourDiscount', 'discountable');
    }

    public function volumeDiscounts() {
        return $this->morphedByMany('App\VolumeDiscount', 'discountable');
    }
}

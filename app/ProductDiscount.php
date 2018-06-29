<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    public function discounts() {
        return $this->morphTo('App\Discount', 'discountable');
    }
}

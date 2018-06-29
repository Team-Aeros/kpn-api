<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    protected $fillable = ['name', 'interval', 'price', 'discount_id'];
}

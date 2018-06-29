<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['paid', 'amount'];

    public function subscription() {
        return $this->belongsTo('App\Subscription');
    }
}

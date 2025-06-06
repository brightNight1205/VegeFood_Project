<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model
{
    
   public function order()
    {
        return $this->hasOne(Order::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

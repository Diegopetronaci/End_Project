<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
    * Get the order that owns the Payment
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function order()
   {
       return $this->belongsTo('App\Order');
   }
}


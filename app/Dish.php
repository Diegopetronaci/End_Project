<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    /**
     * Get the restaurant that owns the Dish
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    /**
     * The orders that belong to the Dish
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * Get the user that owns the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The types that belong to the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function types()
    {
        return $this->belongsToMany('App\Type');
    }

    /**
     * Get all of the dishes for the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'address', 'phone', 'cover', 'user_id', 'types'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

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

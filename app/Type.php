<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The restaurants that belong to the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant');
    }
}


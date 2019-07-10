<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    public function targets()
    {
        return $this->morphToMany('App\Models\Target', 'targetable');
    }
    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }
}

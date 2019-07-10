<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    public function categories(){
        return $this->belongsToMany('App\Models\Category', 'classifications');
    }
    public function types(){
        return $this->belongsToMany('App\Models\Type', 'targets');
    }
}

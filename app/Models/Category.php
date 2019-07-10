<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];
    public function sub_categories(){
        return $this->belongsToMany('App\Models\SubCategory', 'classifications');
    }
    
    public function classifieds(){
        return $this->hasMany('App\Models\Classified');
    }
}

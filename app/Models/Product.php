<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description',
        'price',
        'quantity',
    ];

    public function units(){
    	return $this->hasMany('App\Models\Unit');
    }
     /**
     * Get all of the product's images.
     */
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    public function categorize(){
        return $this->morphMany('App\Models\Category', 'categorizeable');
    }
    public function categories()
    {
        return $this->morphToMany('App\Models\Category', 'categorizeable');
    }
}



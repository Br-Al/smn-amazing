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
        'comparative_price',
        'front_image',
        'quantity',
        'back_image',
        'unit_id',
        'sub_category_id'
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
    public function sub_categories(){
        return $this->belongsTo('App\Models\SubCategory');
    }
}



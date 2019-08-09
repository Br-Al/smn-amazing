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
   /* public function sub_categories(){
        return $this->belongsToMany('App\Models\SubCategory', 'classifications');
    }
    
    public function classifieds(){
        return $this->hasMany('App\Models\Classified');
    }*/
    /**
     * Get all of the posts that are assigned this tag.
     */
    public function products()
    {
        return $this->morphedByMany('App\Models\Product', 'categorizeable');
    }
    public function categorize(){
        return $this->belongsToMany('App\Models\Category', 'categorize','parent_id', 'child_id');
    }
    public static function whereNotParent(){
        $ids = \DB::table('categorize')->pluck('child_id');
        return Category::whereNotIn('id', $ids)->get();
    }
}

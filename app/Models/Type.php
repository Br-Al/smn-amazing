<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
    public function sub_categories(){
        return $this->belongsToMany('App\Models\SubCategory', 'targets');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'imageable_type', 'imageable_id', 'alt'
    ];
    /**
     * Get all of the owning commentable models.
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}

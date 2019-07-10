<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    public function classifieds()
    {
        return $this->morphedByMany('App\Models\Classified', 'taggable');
    }
    public function roles()
    {
        return $this->morphedByMany('Spatie\Permission\Models\Role', 'taggable');
    }
}

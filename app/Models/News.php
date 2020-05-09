<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function slugs()
    {
        return $this->hasOne('App\Models\Slug','id','slug_id');
    }

    public function users()
    {
        return $this->hasOne('App\Models\User','id','uid');
    }
}

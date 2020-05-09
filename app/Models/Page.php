<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function slugs()
    {
        return $this->hasOne('App\Models\Slug','id','slug_id');
    }
}

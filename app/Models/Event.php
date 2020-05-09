<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function slugs()
    {
        return $this->hasOne('App\Models\Slug','id','slug_id');
    }
}

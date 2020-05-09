<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CateVideo extends Model
{
    protected $fillable = [
        'title', 'slug_id', 'description','parent_id','image'
    ];

    public function slugs()
    {
        return $this->hasOne('App\Models\Slug','id','slug_id');
    }

    public function parent(){

        return $this->belongsTo('App\Models\CateVideo','pid');

    }
}

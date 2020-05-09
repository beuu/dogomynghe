<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TuVan extends Model
{
    protected $fillable = [
        'name', 'phone', 'email','text'
    ];
}

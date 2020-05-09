<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use App\Models\User;
class Role extends EntrustRole
{
    protected $fillable = [
        'name', 'display_name', 'description',
    ];
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * The role's users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

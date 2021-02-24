<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'id', 'name','code','created_by','updated_by'
    ];
    protected $table = 'permissions';

    public function permission_role()
    {
        return $this->hasMany(permission_roles::class, 'id_permission','id');
    }
    public function role()
    {
        return $this->belongsToMany(role::class, 'permission__roles','id_permission', 'id_role');
    }
}

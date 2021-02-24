<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id', 'name','code','created_by','updated_by'
    ];
    protected $table = 'roles';
    public function role_user()
    {
            return $this->hasMany(Role_User::class, 'id_role','id');
    }
    public function user()
    {
        return $this->belongsToMany(users::class, 'role__users','id_role', 'id_user');
    }

    public function permissions()
    {
        return $this->belongsToMany(permission::class, 'permission__roles','id_role', 'id_permission');
    }
}

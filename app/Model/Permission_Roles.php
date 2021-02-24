<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission_Roles extends Model
{
    protected $fillable = [
        'id_permission', 'id_role'
    ];
    protected $table = 'permission__roles';

    public function role()
    {
        return $this->belongsTo(role::class , 'id_role', 'id');
    }
}

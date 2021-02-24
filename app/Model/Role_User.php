<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    protected $fillable = [
        'id_user', 'id_role'
    ];
    protected $table = 'role__users';

    public function user()
    {
        return $this->belongsTo(users::class , 'id_user', 'id');
    }
}

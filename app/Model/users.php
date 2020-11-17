<?php

namespace App\Model;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


//class users extends Model
class users extends Authenticatable implements MustVerifyEmail
{
    protected $table = 'Users';
    protected $fillable = [
        'name', 'password', 'status',
    ];

    public function get_login($email, $pass)
    {

        if(Auth::attempt(['email' => $email, 'password' => $pass])) {
            return Auth::user();
        }
        return null;
    }

    public function post()
    {
        return $this->hasMany('App\Model\post');
    }
}

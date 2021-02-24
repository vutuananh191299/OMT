<?php

namespace App\Model;
use DB;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'Post';

    protected $fillable = [
        'title', 'describe', 'summary','content', 'url',
    ];

    public function users()
    {
        return $this->hasOne('App\Model\users', 'id', 'id_users');
    }
}


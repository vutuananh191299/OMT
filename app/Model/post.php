<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'Post';

    protected $fillable = [
        'title', 'describe', 'summary','content', 'url',
    ];
}


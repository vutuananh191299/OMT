<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id', 'content','user_id','post_id','status'
    ];
    protected $table = 'comment';

    public function user()
    {
        return $this->hasOne(users::class, 'id','user_id');
    }
}

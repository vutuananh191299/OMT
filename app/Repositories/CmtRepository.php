<?php

namespace App\Repositories;

use App\Model\Comment;
use App\Model\post;
use App\Model\Role;
use App\Model\Role_User;
use Carbon\Carbon;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

//use Your Model

/**
 * Class UserRepository.
 */
class CmtRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return post::class;
    }

//
    public function getroleData($id)
    {
        $roles = Comment::orderBy('id', 'desc')->with('user')->where('post_id', $id)->get();
        return $roles;
    }

//
    public function post_insert( $req, $user_id, $post_id)
    {
        $content = $req->content;
        $mytime = Carbon::now();
        $data = array(
            'content' => $content,
            'user_id' => $user_id,
            'post_id' => $post_id,
            'created_at' =>$mytime
        );
        $insert = Comment::insert($data);
        return $insert;
    }
    public function deletes($id){
        $data = array(
            'status' => 2,
        );
        $del = Comment::where('id', $id )->update($data);
        return $del;
    }
}
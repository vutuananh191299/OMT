<?php

namespace App\Repositories;

use App\Model\post;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

//use Your Model

/**
 * Class AdminRepository.
 */
class AdminRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return post::class;
    }

    public function getuserData($keyword = null){

        $value=post::with('users');
        if (!empty($keyword)) {
            $value = $value->whereRaw('title like "%' .$keyword .'%"');
        }
//        dd($value);
        return $value->get();

    }

    public function post_insert($req){

        $id_user =  \Illuminate\Support\Facades\Auth::user()->id;
        $title = $req->title;
        $describe = $req->describe;
        $summary = $req->summary;
        $content = $req->content;

        $data = array(
            'title' => $title,
            'describe' => $describe,
            'summary' => $summary,
            'content' => $content,
            'id_users' => $id_user
        );

        $insert = post::insert($data);

        return $insert;
    }

    public function getDataById($id){
        $update = Post::where('id', $id)->first();
        return $update;
    }

    public function post_update($req, $id)
    {
        $title = $req->title;
        $describe = $req->describe;
        $summary = $req->summary;
        $content = $req->content;
        $id_user = Session('id');
        $data = array(
            'title' => $title,
            'describe' => $describe,
            'summary' => $summary,
            'content' => $content,
            'id_users' => $id_user
        );
        $update = Post::where('id', $id)->update($data);
        return $update;
    }
}

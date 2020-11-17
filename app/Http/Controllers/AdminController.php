<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\users;
use App\Model\post;
use App\Http\Requests\Request_register;

class AdminController extends Controller
{
    //admin
    public function admin(){
        $id_user =  Session('id');
        $list = Post::
            join('users', 'users.id', '=', 'post.id_users')
            ->where('post.id_users', $id_user)
            ->get(['post.id','post.title','post.describe','post.summary','post.content','post.status','post.id_users','post.url']);
        return view('admin.list', ['list' => $list]);
    }
    //insert
    public function insert(){
        return view('admin.insert');
    }
    //postInsert
    public function postInsert(Request $req)
    {

        $id_user =  Session('id');
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
       $insert = Post::insert($data);

        if ($insert == null){
            return redirect()->route('admin')->with('error_insert','Tạo mới thất bại');
        }
        return redirect()->route('admin')->with('success_insert','Tạo mới thành công');
    }
    //update
    public function update($id){

        $update = Post::where('id', $id)->get();
        return view('admin.update',['update' => $update]);
    }
    //postUpdate
    public function postUpdate(Request $req, $id)
    {
        $title = $req->title;
        $describe = $req->describe;
        $summary = $req->summary;
        $content = $req->content;
        $id_user =  Session('id');
        $data = array(
            'title' => $title,
            'describe' => $describe,
            'summary' => $summary,
            'content' => $content,
            'id_users' => $id_user
        );
       $update = Post::where('id', $id)->update($data);
        if ($update == null){
            return redirect()->route('admin')->with('error_update','Cập nhật thất bại');
        }
        return redirect()->route('admin')->with('success_update','Cập nhật thành công');
    }
    //delete
    public function delete($id){

        Post::where('id', $id )->delete();
        return redirect()->route('admin');
    }


    public function soft_delete($id){
        $data = array(
            'status' => 2,
        );
        Post::where('id', $id )->update($data);
        return redirect()->route('admin');
    }
}

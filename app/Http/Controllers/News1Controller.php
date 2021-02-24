<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\users;
use App\Model\post;
use App\Http\Requests\Request_register;

class News1Controller extends Controller
{
    public function _construct(){
        parent::__construct();
    }
    public function home(){
        $home = Post::all();
        return view('home.home' , ['home' => $home]);
    }
    public function daylaham($id)
    {
//        dd(Auth::user());
        $page_next = DB::table('post')->where('id','<>', $id )->get();
        $page = DB::table('post')->where('id', $id)->first();
//        dd(view('post.detail'));
        return view('post.detail' , compact('page_next' , 'page'));
    }

}
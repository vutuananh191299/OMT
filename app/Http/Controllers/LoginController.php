<?php

namespace App\Http\Controllers;
use App\Model\post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Cookie\Middleware\Encrypt;
use App\Model\users;
use App\Http\Requests\Request_register;

class LoginController extends Controller
{
    //accessLogin
    public function accessLogin()
    {
        return view('login.login');
    }
    //login_post
    public function login_post(Request $req)
    {

        $cus           = new users();
        $cus->email    = Request('email');
        $cus->pass = Request('password');

        $cus           = $cus->get_login($cus->email,$cus->pass);

        if(!empty($cus) && $cus->status==1){
            return redirect()->route("home")->with('messages',' Welcome user: ');
        }
        if (!empty($cus) && $cus->status==2){
            return redirect()->route("admin")->with('messages',' Welcome user: ');
        }
        if (!empty($cus) && $cus->status==3){
            return redirect()->route("admin")->with('messages',' Welcome user: ');
        }
        return redirect()->route('login')->with('error1','Đăng nhập sai');
    }
    //logout_user
    public function logout_user(Request $request)
    {
        $request->session()->flush();

        // Session::flush();

        return redirect()->route('home')->with('success','Đăng xuất thành công');
    }
    //register
    public function register(){
        return view('register.register');
    }
    //register_post
    public function register_post(Request_register $req){

        $email = $req->email;
        $password = $req->password;
        $data = array(
            'email' => $email,
            'password' => bcrypt($password),
        );
        Users::insert($data);
        return redirect()->route('login');
    }
}

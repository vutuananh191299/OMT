<?php

namespace App\Repositories;

use App\Model\post;
use App\Model\users;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

//use Your Model

/**
 * Class UserRepository.
 */
class UserRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return post::class;
    }

    public function getuserData($id=null){
        $value= users::orderBy('id', 'desc')->get();
        return $value;
    }

    public function post_insert($req){


            $email= $req->email;
            $password = $req->password;

            $data = array(
                'email' => $email,
                'password' => md5($password),
            );

            $insert = users::insert($data);

            return $insert;
        }

        public function getDataById($id){
            $update = users::where('id', $id)->first();
            return $update;
        }

        public function post_update($req, $id)
        {
            $email= $req->email_update;
            $password = $req->password_update;

            $data = array(
                'email' => $email,
                'password' => md5($password),
            );
            $update = users::where('id', $id)->update($data);
            return $update;
        }
}
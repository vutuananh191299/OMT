<?php

namespace App\Repositories;

use App\Model\post;
use App\Model\Role;
use App\Model\Permission;
use http\Env\Request;
use Illuminate\Support\Facades\DB;


//use Your Model

/**
 * Class UserRepository.
 */
class RoleRepository
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
    public function getroleData($params)
    {
        $roles = Role::orderBy('id', 'desc');
        if (!empty($params['search'])) {
            $roles= $roles->where("name","like","%".$params['search']."%");
        }
        $roles = $roles->with('user')->get();
        return $roles;
    }

//
    public function post_insert($req)
    {

        $id_user = \Illuminate\Support\Facades\Auth::user()->id;
        $name = $req->name;
        $code = $req->code;

        $data = array(
            'name' => $name,
            'code' => md5($code),
            'created_by' => $id_user,
            'updated_by' => $id_user
        );

        $insert = Role::insert($data);

        return $insert;
    }

    public function getDataById($id)
    {
        $update = Role::where('id', $id)->first();

        return $update;
    }

    public function post_update($req, $id)
    {
        $id_user = Session('id');
        $name = $req->name;
        $code = $req->code;

        $data = array(
            'name' => $name,
            'code' => md5($code),
//            'created_by' => $id_user,
            'updated_by' => $id_user
        );
        $update = Role::where('id', $id)->update($data);
        return $update;
    }

    public function User_Role($role_id, $user_id)
    {

        $data = array(
            'id_user' => $user_id,
            'id_role' => $role_id,
        );

        $insert = DB::table('role__users')->insert($data);

        return $insert;
    }
}
<?php

namespace App\Repositories;

use App\Model\post;
use App\Model\Role;
use App\Model\Permission;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class UserRepository.
 */
class PermissionRepository
{
    /**
     * @return string
     *  Return the model
     */

//
    public function getpermissionData($params)
    {
        $per = Permission::orderBy('id', 'desc');
        if (!empty($params['search'])) {
            $per= $per->where("name","like","%".$params['search']."%");
        }
        $per = $per->with('role')->get();
        return $per;
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

        $insert = Permission::insert($data);

        return $insert;
    }

    public function getDataById($id)
    {
        $update = Permission::where('id', $id)->first();

        return $update;
    }

    public function post_update($req, $id)
    {
        $id_user = \Illuminate\Support\Facades\Auth::user()->id;
        $name = $req->name;
        $code = $req->code;

        $data = array(
            'name' => $name,
            'code' => md5($code),
//            'created_by' => $id_user,
            'updated_by' => $id_user
        );
        $update = Permission::where('id', $id)->update($data);

        return $update;
    }

    public function per_role($role_id, $per_id)
    {

        $data = array(
            'id_permission' => $per_id,
            'id_role' => $role_id,
        );

        $insert = DB::table('permission__roles')->insert($data);

        return $insert;
    }
}
<?php

namespace App\Http\Controllers;

use App\Model\Role;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\users;
use App\Model\post;
use App\Http\Requests\Request_register;

/**
 * @property RoleRepository roleRepo
 */
class RoleController extends Controller
{
    public function __construct()
    {
        $this->roleRepo = new RoleRepository();
    }

    //user
    public function role()
    {
        return view('admin.role');
    }

    public function getRole(Request $request)
    {
        $userData['data'] = $this->roleRepo->getroleData($request->all());
        $users = users::get();
        return view('data.list_data_role', compact('userData', 'users'));
    }
    //    //insert
    public function insert(){
        return view('admin.insert_Role');
    }
        //postInsert
    public function postInsert(Request $req)
    {
        return $this->roleRepo->post_insert($req);
    }

    //    //update
    public function update($id)
    {

        $updateData = $this->roleRepo->getDataById($id);

        return view('data.update_data_role', compact('updateData'));
    }

    //    postUpdate
    public function postUpdate(Request $req, $id)
    {
        return $this->roleRepo->post_update($req, $id);
    }

    //    //delete
    public function delete($id)
    {
        $delete = Role::where('id', $id)->delete();
        return $delete;
    }

    public function userRole($role_id,$user_id){

        return $this->roleRepo->User_Role($role_id, $user_id);
    }
    //
    //
    //    public function soft_delete($id)
    //    {
    ////        $data = array(
    ////            'status' => 2,
    ////        );
    ////        Post::where('id', $id )->update($data);
    ////        return redirect()->route('admin');
    //    }
}
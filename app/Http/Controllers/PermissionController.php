<?php

namespace App\Http\Controllers;

use App\Model\Permission;
use App\Model\Role;
use App\Repositories\PermissionRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\users;
use App\Model\post;
use App\Http\Requests\Request_register;

/**
 * @property PermissionRepository PerRepo
 */
class PermissionController extends Controller
{
    public function __construct()
    {
        $this->PerRepo = new PermissionRepository();
    }

    //user
    public function permission()
    {
        return view('admin.permission');
    }

    public function getPermission(Request $request)
    {
        $userData['data'] = $this->PerRepo->getpermissionData($request->all());
        $roles = Role::get();
        return view('data.list_data_permission', compact('userData','roles'));
    }
    //    //insert
    public function insert_Permission(){
        return view('admin.insert_Permission');
    }
    //postInsert
    public function insert_per(Request $req)
    {
        return $this->PerRepo->post_insert($req);
    }

    //    //update
    public function update_Permission($id)
    {

        $updateData = $this->PerRepo->getDataById($id);

        return view('data.update_data_per', compact('updateData'));
    }

    //    postUpdate
    public function update_Per(Request $req, $id)
    {
        return $this->PerRepo->post_update($req, $id);
    }

    //    //delete
    public function delete($id)
    {
        $delete = Permission::where('id', $id)->delete();
        return $delete;
    }

    public function per_role($role_id,$per_id){
        return $this->PerRepo->per_role($role_id, $per_id);
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
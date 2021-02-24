<?php

namespace App\Http\Controllers;

use App\Repositories\AdminRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\users;
use App\Model\post;
use App\Http\Requests\Request_register;

/**
 * @property AdminRepository adminRepo
 */
class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminRepo = new AdminRepository();
    }

    //admin
    public function admin()
    {
        $id_user = Session('id');
        return view('admin.list');
    }

    public function getUsers(Request $request)
    {
        $keyword = !empty($request->keyword) ? trim($request->keyword) : null;
        $userData['data'] = $this->adminRepo->getuserData($keyword);
//        echo json_encode($userData);
        return view('data.list_data', compact('userData'));

    }
    //insert
    public function insert(){
        return view('admin.insert');
    }
    //postInsert
    public function postInsert(Request $req)
    {
        return $this->adminRepo->post_insert($req);

    }

    //update
    public function update($id)
    {
        $updateData = $this->adminRepo->getDataById($id);

        return view('data.update_data', compact('updateData'));
    }

//    postUpdate
    public function postUpdate(Request $req, $id)
    {
        return $this->adminRepo->post_update($req, $id);
    }

    //delete
    public function delete($id)
    {

        $delete = Post::where('id', $id)->delete();
        return $delete;
    }


    public function soft_delete($id)
    {
//        $data = array(
//            'status' => 2,
//        );
//        Post::where('id', $id )->update($data);
//        return redirect()->route('admin');
    }
}

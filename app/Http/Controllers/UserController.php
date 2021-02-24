<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\users;
use App\Model\post;
use App\Http\Requests\Request_register;

/**
 * @property UserRepository userRepo
 */
class UserController extends Controller
{
    public function __construct()
{
    $this->userRepo = new UserRepository();
}

    //user
    public function user()
    {
        $id_user = Session('id');
        return view('admin.user');
    }

    public function getUsers()
        {
            $userData['data'] = $this->userRepo->getuserData();
            return view('data.list_data_user', compact('userData'));
        }
    //    //insert
        public function insert(){
            return view('admin.insert_User');
        }
    //    //postInsert
        public function postInsert(Request $req)
        {
            return $this->userRepo->post_insert($req);
        }

    //    //update
        public function update($id)
        {
            $updateData = $this->userRepo->getDataById($id);

            return view('data.update_data_user', compact('updateData'));
        }

    //    postUpdate
        public function postUpdate(Request $req, $id)
        {
            return $this->userRepo->post_update($req, $id);
        }

    //    //delete
        public function delete($id)
        {

            $delete = users::where('id', $id)->delete();
            return $delete;
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
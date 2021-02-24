<?php

namespace App\Http\Controllers;

use App\Model\Role;
use App\Repositories\CmtRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\users;
use App\Model\post;
use App\Http\Requests\Request_register;

/**
 * @property CmtRepository cmtRepo
 */
class CommentController extends Controller
{
    public function __construct()
    {
        $this->cmtRepo = new CmtRepository();
    }


    public function getComment($id)
    {
        $data = $this->cmtRepo->getroleData($id);

        return view('data.list_data_cmt', compact('data'));
    }
    //postInsert
    public function postComment(Request $req, $user_id,$post_id)
    {

        return $this->cmtRepo->post_insert($req, $user_id, $post_id);
    }

        public function del_Comment($id)
        {
            return $this->cmtRepo->deletes($id);
        }
}
<?php

namespace App\Http\Controllers;

use App\Model\post;
use App\Model\Role;
use App\Model\users;
use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = post::where('title', 'like', '%'.$query.'%')->get();

            }
            else
            {
                $data =  post::orderBy('id', 'desc')
                    ->join('users', 'users.id', '=', 'post.id_users')
                    ->get(['post.id','post.title','post.describe','post.summary','post.content','post.status','post.id_users','post.url','users.email']);
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as  $key => $row)
                {
                    $output .= '
        <tr>
        <td align=\'center\'> '.($key+1).' </td>
         <td align=\'center\'>'.$row->title.'</td>
         <td align=\'center\'>'.$row->describe.'</td>
         <td align=\'center\'>'.$row->summary.'</td>
         <td align=\'center\'>'.$row->content.'</td>
         <td align=\'center\'>'.$row->url.'</td>
         <td align=\'center\'>'.$row->email.'</td>
         <td align=\'center\'>
            <a href="javascript:void(0)" onclick="editPost('.$row ->id.')" class="btn btn-info">Update</a>
            <a href="javascript:void(0)" onclick="deleted('.$row ->id.')" class="btn btn-info">Delete</a>
        </td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }

    function action_User(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = users::where('email', 'like', '%'.$query.'%')->get();

            }
            else
            {
                $data =  users::orderBy('id', 'desc')->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as  $key => $row)
                {
                    $output .= '
        <tr>
        <td align=\'center\'> '.($key+1).' </td>
         <td align=\'center\'>'.$row->email.'</td>
         <td align=\'center\'>'.$row->password.'</td>
         <td align=\'center\'>
            <a href="javascript:void(0)" onclick="editPost('.$row ->id.')" class="btn btn-info">Update</a>
            <a href="javascript:void(0)" onclick="deleted('.$row ->id.')" class="btn btn-info">Delete</a>
        </td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="2">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }

    function action_Role(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            $user = users::get();
            if($query != '')
            {
                $data = Role::where('name', 'like', '%'.$query.'%')->with('user')->get();
            }
            else
            {
                $data =  Role::orderBy('id', 'desc')->with('user')->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as  $key => $row)
                {
                    $output .= '
        <tr>
        <td align=\'center\'> '.($key+1).' </td>
         <td align=\'center\'>'.$row->name.'</td>
         <td align=\'center\'>'.$row->code.'</td>
         <td align=\'center\'>
             <select class="form-control"  align=\'center\' onchange="getRole('.$row->id.')" id=\'user_'.$row->id.'\'>
                <option  value="">USER</option>';
                foreach($user as  $users)
                {
                    $output .= '
                    <option value="'.$users->id.'" @if(in_array('.$users->id.', '.$row->user->pluck('.id.').')) selected @endif>'.$users->email.'</option>
                    ';
                }
                    $output .= '
            </select> 
        </td>
         <td align=\'center\'>
            <a href="javascript:void(0)" onclick="editPost('.$row ->id.')" class="btn btn-info">Update</a>
            <a href="javascript:void(0)" onclick="deleted('.$row ->id.')" class="btn btn-info">Delete</a>
        </td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="2">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }

}

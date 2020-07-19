<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAdminUserRequest;
use App\User;
//use App\UserProfile;
use  Validator,Redirect,DataTables,Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	$page_title = 'Users'; 
    	 if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view('backend.users.index',compact('page_title '));
    }

    public function addUser()
    {
    	$page_title = 'Add User'; 
    	return view('backend.users.add',compact('page_title'));
    }

    public function storeUser(StoreAdminUserRequest $request)
    {
    	//echo "<pre>"; print_r($request->all()); die;
    	$user_data = ['name' => $request->first_name,'email' => $request->email,'user_type' => $request->user_type,'password' => Hash::make($request->password)];
    	$user = User::create($user_data);
    	$user->profile()->create($request->all());
    	return Redirect::route('admin.user.list')->with('success','User added!');

    }


}

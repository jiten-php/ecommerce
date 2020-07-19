<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Validator,Redirect;

class LoginController extends Controller
{
    public function index() 
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('backend.login');
    }

    public function signup()
    {
    	return view('backend.signup');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        //echo "<pre>"; print_r($request->all()); die;
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $messages = [
            'email.required' => 'Please fill a valid email address!',
            'password.required' =>'Please fill a valid password!'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt($credentials, $remember_me)) {
            // Authentication passed...
            return redirect()->intended('cms/dashboard')->with('success', 'Login Successfully!');
        } else {
            return back()->with('error', 'Credential does not match!');
        }
    }

    public function getSignOut()
    {
        
        Auth::logout();
        return Redirect::route('admin.login');
        
    }
    	



}

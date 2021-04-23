<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
class AuthController extends Controller
{
    public function userLogin(Request $req){
        $username = $req->username;
        $password = $req->password;
        $user = User::where('username','=',$username)
                  ->where('password','=',$password)
                  ->first();
        if($user){
            Session::put('username',$user->username);
            Session::put('userrole',$user->role);
            Session::put('userid',$user->id);
            return redirect()->to('dashboard');
        }
        else{
            return redirect()->back()->with('msg','Invalid email or password.');
        } 
    }

    public function login(){
    	if (Session::has('username')) {
    		return view('admin.pages.dashboard');
    	}
        return view('admin.pages.login');
    }

    public function logout(){
        Session::forget('username','userrole');
        return redirect()->to('login');
    }
}

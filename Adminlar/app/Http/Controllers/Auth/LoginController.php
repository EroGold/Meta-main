<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
session_start();

class LoginController extends Controller
{
   

    public function authLogin(){
        $admin_id = session::get('admin_id');
        if($admin_id!=null){
            return view('admin.html');
        }else{
            return redirect()->route('login');
        }
    }

    public function showLoginForm(){
        $this -> authLogin();
        return view('auth.login');
    }

    public function login(request $request){
        
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
    if ($result) {
        Session::put('admin_name', $result->admin_name);
        session::put('admin_id', $result->admin_id);

        return redirect()->intended('/admin.html');
    }else{
        return back()->withErrors([
            'email' => 'Mật khẩu hoặc tài khoản không chính xác',
        ]);
        }    
    }

    public function logout(){
        session::put('admin_name', null);
        session::put('admin_id', null);

        return redirect::to('/login');
    }
}

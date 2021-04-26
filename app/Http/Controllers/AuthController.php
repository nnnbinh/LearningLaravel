<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('login.login');
    }

    public function authenticate(Request $request)
    {   
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials, $request->remember)){
            return redirect()->intended();
        }

        Session::flash('danger','Ten dang nhap hoac mat khau khong dung');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}

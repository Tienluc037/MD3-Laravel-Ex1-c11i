<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user =$request->only('name','email','password','phone');
        $user['password'] = Hash::make($user["password"]);
        DB::table('users')->insert($user);
        return redirect()->route('login');
    }

    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = $request->only('email','password');
        if(Auth::attempt($user)){
            return redirect()->route('book.list');
        }else{
            Session::flash('mgs','Tài khoản hoặc mật khẩu không chính xác');
            return  redirect()->back();
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

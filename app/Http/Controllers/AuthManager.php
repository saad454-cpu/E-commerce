<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    function loginPost(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->route('index.checkout')->with("success","You have been successfuly Logged in  ");
        }
        return redirect(route('auth.login'))->with("error","Login details are not valid");
    }
    function registerPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('auth.register'))->with("error","Register Failed ");
        }
        return redirect(route('auth.login'))->with("success","registration Success ");
    }
    function logout(){
        Session::flush();
        Auth::logou();
        return redirect(route('auth.login'));
    }
}

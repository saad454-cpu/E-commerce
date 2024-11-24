<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class conixxione extends Controller
{
    public function show(){
        return view("login");
    }
    public function login(Request $req){
       if( Auth::attempt([
        "email"=>$req->email,
        "password"=>$req->password,
        
       ])){
        $req->session()->regenerate();
        return redirect()->route("index.home");
       }
       return back()->with("error","ivalalide");
    }
    public function deconnxione(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route("index.home");

    }
}

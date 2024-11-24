<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Inscription extends Controller
{
    public function show(){
        return view("register");
        
    }
    public function inscription(Request $req ){
        $data=$req->all();
        $data["password"]=Hash::make($req->password);
        $user=User::create($data);
        Auth::login($user);
        return redirect()->route('index.home');
    }
}

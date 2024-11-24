<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class catcontroller extends Controller
{
    public function cat(Request $request){
        $v=$request->cat;
        $cat=Product::where("cat",$v);
        return view("shop",compact("cat"));


    }
}

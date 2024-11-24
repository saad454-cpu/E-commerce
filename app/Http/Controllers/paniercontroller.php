<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Illuminate\Http\Request;

class paniercontroller extends Controller
{
    public function create($id){
        $idU=auth()->user()->id;
        
        Panier::create([
            "user_id"=>$idU,
            "products_id"=>$id,
        ]);
        return redirect()->route("index.shop");

        
        

    }

    public function afficher(){
        $idU=auth()->user()->id;
        $data=Panier::where("user_id",$idU)->get();
        // return   $data;
        return view("cart",compact("data"));
    }



    
    
        
    


    public function afficherLayout(){
        $idU=auth()->user()->id;
        $cou=Panier::where("user_id",$idU)->get();
        // return   $data;
        return view("layout",compact("cou"));
    }


}

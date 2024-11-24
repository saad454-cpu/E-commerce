<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    public function shop(Request $request ){
        $cat=$request->cat;
        $query=Product::query();
        if($request){
            if($cat){
                $query= $query->where("cat",$cat);

            }

        }
        $products=$query->get();
        return view("shop",compact("products"));

        // return view('shop')->with([
        //     "products"=> Product::latest()->paginate(10),
            
        // ]);
    }
    public function orderconfirmation(){
        return view('orderconfirmation');
    }
}

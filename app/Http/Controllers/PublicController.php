<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        return view("public.home",$data);
    }

    public function singleView($p_id){
        $data['product'] = Product::find($p_id);
        $data['categories'] = Category::all();
        return view("public.viewProduct",$data);
    }

    public function cart(Request $request){

        return view("public/cart");
    }
    public function checkOut(){
        return view("public/checkout");
    }
}

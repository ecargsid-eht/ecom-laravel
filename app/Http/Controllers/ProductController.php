<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view("admin.manageProducts",$data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        return view("admin.insertProduct", $data);
    }

    public function store(Request $req)
    {
        $req->validate([
            "title" => "required",
            "category_id" => "required",
            "brand_id" => "required",
            "image" => "required",
            "description" => "required",
            "price" => "required",
            "discount_price" => "required",
            "qty" => "required",
        ]);

        $pro = new Product();
        $pro->title = $req->title;
        $pro->category_id = $req->category_id;
        $pro->brand_id = $req->brand_id;
        $pro->description = $req->description;
        $pro->price = $req->price;
        $pro->discount_price = $req->discount_price;
        $pro->qty = $req->qty;

        $file = $req->image->getClientOriginalName();

        $req->image->move(public_path("images"),$file);

        $pro->image = $file;

        $pro->save();
        return redirect()->route("product.index");
    }

    public function edit(Product $product){
        $data['product'] = $product;
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();

        return view("admin.editProduct",$data);
    }

    public function update(Request $req, Product $product){
        $product->title = $req->title;
        $product->category_id = $req->category_id;
        $product->brand_id = $req->brand_id;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->discount_price = $req->discount_price;
        $product->qty = $req->qty;

        if($req->has("image")){
            $file = $req->image->getClientOriginalName();
            $req->image->move(public_path("images"),$file);
            $product->image = $file;
        }

        $product->save();

        return redirect()->route("product.index");
    }
}

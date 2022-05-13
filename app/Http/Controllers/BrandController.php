<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $data['brand'] = Brand::all();
        return view("admin.manageBrand",$data);
    }

    public function create(){
        return view("admin.insertBrand");
    }

    public function store(Request $req){
        $req->validate([
            "brand_title" => "required"
        ]);

        $brand = new Brand();
        $brand->brand_title = $req->brand_title;

        $brand->save();

        return redirect()->route("brand.index")->with("success","Data inserted successfully.");
    }

    public function edit( Brand $brand){
        $data['brand'] = $brand;
        return view("admin.editBrand",$data);
    }

    public function update(Request $req, Brand $brand){
        $brand->brand_title = $req->brand_title;
        $brand->save();
        return redirect()->route("brand.index");
    }


    public function destroy(Brand $brand){
        $brand->delete();
        return redirect()->route("brand.index")->with("error","Data deleted.");

    }
}

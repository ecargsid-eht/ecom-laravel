<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PDO;

class CategoryController extends Controller
{
    public function index()
    {
        $data['category'] = Category::all();
        return view("admin.manageCategory", $data);
    }

    public function create()
    {
        $data['category'] = Category::where("parent_id", "0")->get();
        return view("admin.insertCategory", $data);
    }

    public function store(Request $req)
    {
        $req->validate([
            'cat_title' => 'required',
            'parent_id' => 'required',
        ]);

        $category = new Category();
        $category->cat_title = $req->cat_title;
        $category->parent_id = $req->parent_id;
        $category->save();

        return redirect()->route("category.index")->with("success","Data inserted successfully.");
    }

    public function edit(Category $category){
        $data['category'] = $category;
        $data['categories'] = Category::all()->except($category->id);
        return view("admin.editCategory",$data);
    }

    public function update(Request $req, Category $category){
        $category->cat_title = $req->cat_title;
        $category->save();
        return redirect()->route("category.index");
    }

    public function destroy(Category $category)
    {
        $cat = Category::find($category->id);

        $cat->delete();
        return redirect()->back()->with("error","Data Deleted.");
    }


    // public function edit(Request $req){
    //     $cat = Category::where("id",$req->id);
    //     return view("")
    // }
}

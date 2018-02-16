<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function index(){
        return view('admin.dashboard.add-category');
    }
    public function manageCategory(){
        $categories = Category::all();
        return view('admin.dashboard.manage-categories', ['categories'=>$categories]);
    }

    public function addNewCategory(Request $request){

        $category = new Category();
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        $category->save();
        return redirect('/admin/add-category')->with('message', 'Category Information Saved Successfully');

    }

    public function unpublishedCategory($id){
        $category=Category::find($id);
        $category->publication_status = 0;
        $category->save();
        return redirect('/admin/manage-categories')->with('message', 'Category Unpublished');
    }

    public function publishedCategory($id){
        $category=Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('/admin/manage-categories')->with('message', 'Category Published');
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.dashboard.edit-category', ['category'=>$category]);
    }

    public function updateCategory (Request $request){

        $category= Category::find($request->category_id);
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        $category->save();
        return redirect('/admin/manage-categories')->with('message', 'Category Info Update Successfully');
    }

    public function deleteCategory ($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/manage-categories')->with('message', 'Category Deleted');
    }

}

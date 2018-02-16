<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class NewsCategoryController extends Controller
{
    public function index(){
        return view('admin.news-category.add-category');
    }



    public function saveCategory(Request $request){

        $category = new Category();
        $category->category_name          = $request->category_name;
        $category->category_description   = $request->category_description;
        $category->publication_status     = $request->publication_status;
        $category->save();

        return redirect('/news-category')->with('message','Category info save successfully');

    }

    public function manageNews(){
   //     $categories = Category::all();
        $categories =   DB::table('categories')->paginate(3);
      //  return $categories;

        return view('admin.news-category.manage-category',['categories' =>$categories]);
    }

    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();

        return redirect('/manage-news-category')->with('message','Category info Unpublished');

    }

    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();

        return redirect('/manage-news-category')->with('message','Category info Published');

    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.news-category.edit-category',['category'=>$category]);
    }

    public function updateCategory(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/manage-news-category')->with('message','Category info updated');

    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();

        return redirect('/manage-news-category')->with('message','Category info deleted');

    }
}

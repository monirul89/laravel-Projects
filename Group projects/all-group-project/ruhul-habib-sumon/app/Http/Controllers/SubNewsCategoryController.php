<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use DB;

class SubNewsCategoryController extends Controller
{
    public function addSubCategory(){
        return view('admin.sub-news-category.add-sub-category');
    }

    public function saveSubCategory(Request $request){

        $category = new SubCategory();
        $category->sub_category_name          = $request->sub_category_name;
        $category->sub_category_description   = $request->sub_category_description;
        $category->publication_status     = $request->publication_status;
        $category->save();

        return redirect('/add-sub-category')->with('message','Category info save successfully');


    }

    public function manageSubCategory(){
        $categories =   DB::table('sub_categories')->paginate(4);
//        $categories = SubCategory::all();

        return view('admin.sub-news-category.manage-sub-category',['categories' =>$categories]);
    }

    public function unpublishedSubCategory($id){
        $category = SubCategory::find($id);
        $category->publication_status = 0;
        $category->save();

        return redirect('/manage/sub-category')->with('message','Sub Category info Unpublished');

    }

    public function publishedSubCategory($id){
        $category = SubCategory::find($id);
        $category->publication_status = 1;
        $category->save();

        return redirect('/manage/sub-category')->with('message','Sub Category info Published');

    }

    public function editSubCategory($id){
        $category = SubCategory::find($id);
        return view('admin.sub-news-category.edit-sub-category',['category'=>$category]);
    }

    public function updateSubCategory(Request $request){
        $category = SubCategory::find($request->sub_category_id);
        $category->sub_category_name = $request->sub_category_name;
        $category->sub_category_description = $request->sub_category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/manage/sub-category')->with('message','Sub Category info updated');

    }

    public function deleteSubCategory($id){
        $category = SubCategory::find($id);
        $category->delete();

        return redirect('/manage/sub-category')->with('message','Sub Category info deleted');

    }
}

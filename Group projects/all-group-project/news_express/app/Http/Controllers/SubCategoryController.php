<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use DB;

class SubCategoryController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        return view('admin.sub-category.add-sub-category', ['categories'=>$categories]);
    }
    public function saveSubCategory(Request $request){
        $this->Validate($request, [
            'sub_category_name'=>'required',
            'category_id'=>'required',
            'sub_category_description'=>'required'
        ]);

        $subCategory = new SubCategory();

        $subCategory->sub_category_name = $request->sub_category_name;
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_category_description = $request->sub_category_description;
        $subCategory->publication_status = $request->publication_status;
        $subCategory->save();

        return redirect('/sub-category/add-sub-category')->with('message','Sub-category info save successfully');
    }
    public function manageSubCategory(){
        $subCategories = DB::table('sub_categories')
            ->join('categories', 'sub_categories.category_id','=','categories.id')
            ->select('sub_categories.*','categories.category_name')
            ->get();
        return view('admin.sub-category.manage-sub-category',['subCategories'=>$subCategories]);
    }

    public function unpublishedSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory->publication_status = 0;
        $subCategory->save();

        return redirect('/sub-category/manage-sub-category')->with('message','Sub-category info Unpublished');
    }

    public function publishedSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory->publication_status = 1;
        $subCategory->save();

        return redirect('/sub-category/manage-sub-category')->with('message','Sub-category info Published');
    }

    public function editSubCategory($id){
        $subCategory = SubCategory::find($id);
        $categories = Category::where('publication_status', 1)->get();
        return view('admin.sub-category.edit-sub-category',[
            'subCategory'=>$subCategory,
            'categories'=>$categories
        ]);

    }

    public function updateSubCategory(Request $request){
        $subCategory = SubCategory::find($request->sub_category_id);
        $subCategory->sub_category_name = $request->sub_category_name;
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_category_description = $request->sub_category_description;
        $subCategory->publication_status = $request->publication_status;
        $subCategory->save();

        return redirect('/sub-category/manage-sub-category')->with('message','Sub-category info Updated');
    }

    public function deleteSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory->delete();

        return redirect('/sub-category/manage-sub-category')->with('message','Sub-category info Deleted');
    }
}

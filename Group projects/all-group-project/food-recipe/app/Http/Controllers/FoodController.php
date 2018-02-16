<?php

namespace App\Http\Controllers;

use App\Category;
use App\Food;
use DB;
use Image;
use Illuminate\Http\Request;


class FoodController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        return view('admin.food.add-food', ['categories'=>$categories]);
    }
    public function saveFood(Request $request){
        $this->validate($request, [
            'category_id' => 'required',
            'food_name' => 'required',
            'food_price' => 'required|Numeric',
            'food_quantity' => 'required',
            'food_description' => 'max:5000',
            'food_image'=>'required|image',
        ]);

        $foodImage = $request->file('food_image');
        $imageName = $foodImage->getClientOriginalName();
        $directory = 'food-image/';
        $imageUrl = $directory.$imageName;
        Image::make($foodImage)->save($imageUrl);

        $food = new Food();
        $food->category_id = $request->category_id;
        $food->food_name = $request->food_name;
        $food->food_price = $request->food_price;
        $food->food_quantity = $request->food_quantity;
        $food->food_description = $request->food_description;
        $food->food_image = $imageUrl;
        $food->publication_status = $request->publication_status;
        $food->save();
        return redirect('/food/add')->with('message', 'Food Added Successfully');

    }
    public function manageFood(){
        $foods = DB::table('foods')
            ->join('categories', 'foods.category_id', '=', 'categories.id')
            ->select('foods.*', 'categories.category_name')
            ->get();

        return view('admin.food.manage-food', ['foods' => $foods]);
    }
    public function viewFoodDetails($id){
        $foods = Food::find($id);

        return view('admin.food.view-food', ['foods' => $foods]);
    }

    public function unpublishedFood($id){
        $food = Food::find($id);
        $food->publication_status = 0;
        $food->save();

        return redirect('/food/manage')->with('message', 'Food Unpublished');
    }

    public function publishedFood($id){
        $food = Food::find($id);
        $food->publication_status = 1;
        $food->save();

        return redirect('/food/manage')->with('message', 'Food Published');
    }

    public function editFood($id){
        $categories = Category::where('publication_status', 1)->get();
        $food = Food::find($id);
        return view('admin.food.edit-food', ['food'=> $food, 'categories'=>$categories]);
    }

    public function updateFood(Request $request){
        $foodImage = $request->file('food_image');
        if($foodImage){
            $food = Food::find($request->food_id);
            unlink($food->food_image);

            $imageName = $foodImage->getClientOriginalName();
            $directory = 'food-image/';
            $imageUrl = $directory.$imageName;
            Image::make($foodImage)->save($imageUrl);

            $food->category_id = $request->category_id;
            $food->food_name = $request->food_name;
            $food->food_price = $request->food_price;
            $food->food_quantity = $request->food_quantity;
            $food->food_description = $request->food_description;
            $food->food_image = $imageUrl;
            $food->publication_status = $request->publication_status;
            $food->save();

            return redirect('/food/manage')->with('message', 'Food Updated');

        }else{

            $food = Food::find($request->food_id);
            $food->category_id = $request->category_id;
            $food->food_name = $request->food_name;
            $food->food_price = $request->food_price;
            $food->food_quantity = $request->food_quantity;
            $food->food_description = $request->food_description;
            $food->publication_status = $request->publication_status;
            $food->save();

            return redirect('/food/manage')->with('message', 'Food Updated');
        }



    }

    public function deleteFood($id){
        $food = Food::find($id);
        $food->delete();

        return redirect('/food/manage')->with('message', 'Food Deleted');
    }
}

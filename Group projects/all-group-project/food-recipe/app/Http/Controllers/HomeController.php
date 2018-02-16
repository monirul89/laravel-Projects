<?php

namespace App\Http\Controllers;

use App\Category;
use App\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalCategories = Category::count();
        $totalFoodItem   = Food::count();
        return view('admin.home.home', ['totalCategories'=>$totalCategories, 'totalFoodItem'=>$totalFoodItem]);
    }
}

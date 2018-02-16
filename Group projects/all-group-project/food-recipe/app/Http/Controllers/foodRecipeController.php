<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\Contact;
use App\Food;
use App\Service;
use Illuminate\Http\Request;

class foodRecipeController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','ASC')->skip(1)->take(3)->get();
        return view('front-end.home.home',['categories'  =>$categories]);
    }
    public function aboutUs(){
        $about = About::find(1);
        $categories1 = Category::orderBy('id','ASC')->take(3)->get();
        $categories2 = Category::orderBy('id','DESC')->take(3)->get();
        $foods1 = Food::orderBy('id','DESC')->take(4)->get();
        $foods2 = Food::orderBy('id','DESC')->skip(4)->take(4)->get();
        $foods3 = Food::orderBy('id','DESC')->skip(8)->take(4)->get();
        return view('front-end.about.about',[
            'about'=>$about,
            'categories1'  =>$categories1,
            'categories2'  =>$categories2,
            'foods1'  =>$foods1,
            'foods2'  =>$foods2,
            'foods3'  =>$foods3,
            ]);
    }
    public function services(){
        $services = Service::all();
        $foods = Food::orderBy('id','DESC')->take(3)->get();
        return view('front-end.services.services',[
            'services'  =>$services,
            'foods'  =>$foods,
        ]);
    }
    public function gallery(){
        $foods = Food::orderBy('id','DESC')->take(9)->get();
        return view('front-end.gallery.gallery',['foods'=>$foods]);
    }
    public function contactUs(){
        $contact = Contact::find(1);
        return view('front-end.contact.contact',['contact'=>$contact]);
    }

}

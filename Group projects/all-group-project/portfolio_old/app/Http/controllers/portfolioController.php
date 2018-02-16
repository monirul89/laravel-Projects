<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function aboutUs(){
        return view('front-end.about.about');
    }
    public function projects(){
        return view('front-end.projects.project');
    }
    public function gallery(){
        return view('front-end.gallery.gallery');
    }
    public function contactUs(){
        return view('front-end.contact.contact');
    }


}

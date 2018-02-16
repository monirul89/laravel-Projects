<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Category;
use App\Author;
use Illuminate\Support\Facades\DB;
class InfluencingQuotesController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        $authors = Author::where('publication_status', 1)->get();
        $rowone = Blog::orderBy('id', 'DESC')->take(4)->get();
        $rowtwo = Blog::orderBy('id', 'DESC')->skip(4)->take(4)->get();
        $rowthree = Blog::orderBy('id', 'DESC')->skip(8)->take(4)->get();
        $rowfour = Blog::orderBy('id', 'DESC')->skip(12)->take(4)->get();
        $popularquotes = Blog::orderBy('id', 'RAND')->take(10)->get();

        return view('front.pages.index',[
            'categories'=> $categories,
            'authors'=> $authors,
            'rowone'=>$rowone,
            'rowtwo'=>$rowtwo,
            'rowthree'=>$rowthree,
            'rowfour'=>$rowfour,
            'popularquotes'=>$popularquotes
        ]);
    }


    public function contactUs(){
        $categories = Category::where('publication_status', 1)->get();
        $authors = Author::where('publication_status', 1)->get();
        return view('front.pages.contact',[
            'categories'=> $categories,
            'authors'=> $authors
        ]);
    }
}

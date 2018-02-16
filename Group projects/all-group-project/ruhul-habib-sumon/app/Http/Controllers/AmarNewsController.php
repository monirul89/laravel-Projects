<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Category;

class amarNewsController extends Controller
{
    public function index (){
        $categories = Category::where('publication_status', 1)->get();

        $newses = News::orderBy('id','DESC')->take(6)->get();
         $newse= News::orderBy('id','ASC')->take(3)->get();
         $recentTopNews = News::orderBy('id','DESC')->take(4)->get();
         $techNewses = News::orderBy('id','DESC')->take(2)->get();
         $allNewsImages= News::orderBy('id')->get();

        return view('front-end.home.home', [
            'categories'=>$categories,
            'newses'=>$newses,
            'newse'=>$newse,
            'recentTopNews'=>$recentTopNews,
            'techNewses'=>$techNewses,
            'allNewsImages'=>$allNewsImages

        ]);
    }

    public function categoryNews(){
        $categories= Category::where('publication_status', 1)->get();
        $recentTopNews = News::orderBy('id','DESC')->take(4)->get();
        return view('front-end.category.category', [
            'categories'=>$categories,
            'recentTopNews'=>$recentTopNews
        ]);
    }



     public function sportsNews (){
        return view('front-end.sports.sports');
    }
    public function detailsNews (){
        return view('front-end.sports.news-details');
    }


}

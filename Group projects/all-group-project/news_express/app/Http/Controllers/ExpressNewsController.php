<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use Illuminate\Http\Request;
use DB;

class ExpressNewsController extends Controller
{
    public function index(){
        $newses = News::where('publication_status', 1)
            ->inRandomOrder()
            ->take(8)
            ->get();
        $galleries = Gallery::where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get();
        return view('front-end.home.home', [
            'newses'=>$newses,
            'galleries'=>$galleries
        ]);
    }

    public function categoryNews($id){
        $newses = News::where('category_id', $id)
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('front-end.news.news', ['newses'=>$newses]);
    }

    public function about(){
        return view('front-end.about.about');
    }
    public function contact(){
        return view('front-end.contact.contact');
    }
    public function privacyPolicy(){
        return view('front-end.privacy-policy.privacy-policy');
    }
    public function singleView($id){
        $news = News::find($id);
        $newses = News::where('publication_status', 1)
            ->inRandomOrder()
            ->take(4)
            ->get();
        return view('front-end.view.single-view', [
            'news'=>$news,
            'newses'=>$newses
        ]);
    }
}

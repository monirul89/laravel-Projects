<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use DB;
use App\SubCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(){
        $categories= Category::where('publication_status', 1)->get();
        $subCategories= SubCategory::where('publication_status', 1)->get();

        return view('admin.news.add-news',[
            'categories'=>$categories,
            'subCategories'=>$subCategories
        ]);
    }

    public function saveNews(Request $request){
        $newsImage= $request->file('news_image');
        $imageName= $newsImage->getClientOriginalName();
        $directory=  'news-images/';
        $imageUrl= $directory.$imageName;
        $newsImage->move($directory, $imageName);

        $news= new News();
        $news->category_id = $request->category_id;
        $news->sub_category_id = $request->sub_category_id;
        $news->news_title = $request->news_title;
        $news->short_description = $request->short_description;
        $news->long_description = $request->long_description;
        $news->news_image = $imageUrl;
        $news->publication_status = $request->publication_status;
        $news->save();

        return redirect('/news/add')->with('message', 'News Information Save Succesfully');

    }

    public function manageNews(){
       $news= DB::table('news')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->join('sub_categories', 'news.sub_category_id', '=', 'sub_categories.id')
            ->select('news.id','news.news_title','news.short_description','news.long_description','news.news_image','news.publication_status', 'categories.category_name', 'sub_categories.sub_category_name')
            ->get();
        return view('admin.news.manage-news',['news'=> $news]);
    }

    public function viewDetails($id){
        $news= News::find($id);
        return view('admin.news.view-news-details',['news'=> $news]);
    }

    public function unpublishedNews($id){
        $news = News::find($id);
        $news->publication_status = 0;
        $news->save();
        return redirect('/news/manage')->with('message','News info Unpublished');
    }

    public function publishedNews($id){
        $news = News::find($id);
        $news->publication_status = 1;
        $news->save();
        return redirect('/news/manage')->with('message','News info Published');
    }

    public function deleteNews($id){
        $news = News::find($id);
        $news->delete();
        return redirect('/news/manage')->with('message','News info deleted');
    }




    public function editNews($id){
        $newses = News::find($id);

        $categories= Category::where('publication_status', 1)->get();
        $subCategories= SubCategory::where('publication_status', 1)->get();

        return view('admin.news.edit-news',[
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'newses'=>$newses
        ]);
//        return view('admin.news.edit-news',['newses'=>$newses]);

    }

    public function updateNews(Request $request){
//
//        $newsImage= $request->file('news_image');
//        $imageName= $newsImage->getClientOriginalName();
//        $directory=  'news-images/';
//        $imageUrl= $directory.$imageName;
//        $newsImage->move($directory, $imageName);

//        $newses= new News();


        $newses = News::find($request->category_id);
        $newses->category_id = $request->category_id;
        $newses->sub_category_id = $request->sub_category_id;
        $newses->news_title = $request->news_title;
        $newses->short_description = $request->short_description;
        $newses->long_description = $request->long_description;
//        $newses->news_image = $imageUrl;
        $newses->publication_status = $request->publication_status;
        $newses->save();

        return redirect('/news/manage')->with('message','News info Updated');

    }





}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\SubCategory;
use Illuminate\Http\Request;
use Image;
use DB;

class NewsController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        $subCategories = SubCategory::where('publication_status', 1)->get();
        return view('admin.news.add-news', [
           'categories'=>$categories,
           'subCategories'=>$subCategories
        ]);
    }
    public function manageNews(){
        $newses = DB::table('news')
            ->join('categories', 'news.category_id','=','categories.id')
            ->join('sub_categories', 'news.sub_category_id','=','sub_categories.id')
            ->select('news.*', 'categories.category_name', 'sub_categories.sub_category_name')
            ->get();
        return view('admin.news.manage-news', ['newses'=>$newses]);
    }
    public function saveNews(Request $request){
        $this->Validate($request, [
            'news_title' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'breaking_news_status' => 'required',
            'news_image' => 'required',
        ]);

        $newsImage = $request->file('news_image');
        $imageName = $newsImage->getClientOriginalName();
        $directory = 'news-images/';
        $imageURL = $directory.$imageName;
        Image::make($newsImage)->save($imageURL);

        $news = new News();
        $news->news_title = $request->news_title;
        $news->category_id = $request->category_id;
        $news->sub_category_id = $request->sub_category_id;
        $news->short_description = $request->short_description;
        $news->long_description = $request->long_description;
        $news->breaking_news_status = $request->breaking_news_status;
        $news->news_image = $imageURL;
        $news->publication_status = $request->publication_status;
        $news->save();

        return redirect('/news/add-news')->with('message', 'News info added successfully');
    }
    public function removeBreakingNews($id){
        $news = News::find($id);
        $news->breaking_news_status = 0;
        $news->save();
        return redirect('/news/manage-news')->with('message', 'Breaking news removed successfully');
    }
    public function makeBreakingNews($id){
        $news = News::find($id);
        $news->breaking_news_status = 1;
        $news->save();
        return redirect('/news/manage-news')->with('message', 'Breaking news made successfully');
    }
    public function unpublishedNews($id){
        $news = News::find($id);
        $news->publication_status = 0;
        $news->save();
        return redirect('/news/manage-news')->with('message', 'News unpublished');
    }
    public function publishedNews($id){
        $news = News::find($id);
        $news->publication_status = 1;
        $news->save();
        return redirect('/news/manage-news')->with('message', 'News published');
    }
    public function deleteNews($id){
        $news = News::find($id);
        $news->delete();
        return redirect('/news/manage-news')->with('message', 'News info deleted');
    }
    public function editNews($id){
        $news = News::find($id);
        $categories = Category::where('publication_status', 1)->get();
        $subCategories = SubCategory::where('publication_status', 1)->get();
        return view('admin.news.edit-news', [
            'news'=>$news,
            'categories'=>$categories,
            'subCategories'=>$subCategories
        ]);
    }
    public function updateNews(Request $request){
        if($request->news_image){
            $news = News::find($request->news_id);
            unlink($news->news_image);

            $newsImage = $request->file('news_image');
            $imageName = $newsImage->getClientOriginalName();
            $directory = 'news-images/';
            $imageURL = $directory.$imageName;
            Image::make($newsImage)->save($imageURL);

            $news->news_title = $request->news_title;
            $news->category_id = $request->category_id;
            $news->sub_category_id = $request->sub_category_id;
            $news->short_description = $request->short_description;
            $news->long_description = $request->long_description;
            $news->breaking_news_status = $request->breaking_news_status;
            $news->news_image = $imageURL;
            $news->publication_status = $request->publication_status;
            $news->save();

            return redirect('/news/manage-news')->with('message', 'News info updated successfully');

        }else{
            $news = News::find($request->news_id);
            $news->news_title = $request->news_title;
            $news->category_id = $request->category_id;
            $news->sub_category_id = $request->sub_category_id;
            $news->short_description = $request->short_description;
            $news->long_description = $request->long_description;
            $news->breaking_news_status = $request->breaking_news_status;
            $news->publication_status = $request->publication_status;
            $news->save();

            return redirect('/news/manage-news')->with('message', 'News info updated successfully');
        }
    }
    public function viewNews($id){
        $news = DB::table('news')
            ->join('categories', 'news.category_id','=','categories.id')
            ->join('sub_categories', 'news.sub_category_id','=','sub_categories.id')
            ->select('news.*', 'categories.category_name', 'sub_categories.sub_category_name')
            ->where('news.id', $id)
            ->first();
        return view('admin.news.view-news', ['news'=>$news]);
    }
}

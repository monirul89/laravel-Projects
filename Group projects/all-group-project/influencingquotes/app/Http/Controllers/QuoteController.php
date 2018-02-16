<?php

namespace App\Http\Controllers;

use App\Author;
use App\Blog;
use Illuminate\Http\Request;
use App\Category;
use DB;
use Validator;
use Image;

class QuoteController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        $authors = Author::where('publication_status', 1)->get();
        return view('admin.dashboard.add-quote',[
            'categories'=> $categories,
            'authors'=> $authors
        ]);
    }

    public function manageQuote(){
        $blogs = DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->get();
        return view('admin.dashboard.manage-quotes',['blogs'=>$blogs]);
    }

    public function saveNewQuote(Request $request){
        $this->Validate($request, [
            'category_id'=>'required',
            'author_id'=>'required',
            'quote_title'=>'required|max:80',
            'quote_description'=>'required',
            'quote_image'=>'nullable',
            'publication_status'=>'required'
        ]);

        $quoteImage = $request->file('quote_image');
        $imageName = $quoteImage->getClientOriginalName();
        $directory= 'quote-images/';
        $imageURL= $directory.$imageName;
        Image::make($quoteImage)->save($imageURL);

        $blog = new Blog();
        $blog->category_id         = $request->category_id;
        $blog->author_id           = $request->author_id;
        $blog->quote_title         = $request->quote_title;
        $blog->quote_description   = $request->quote_description;
        $blog->quote_image         = $imageURL;
        $blog->publication_status  = $request->publication_status;
        $blog->save();

        return redirect('/admin/add-quote')->with('message','Quote Saved Successfully');
    }

    public function unpublishedQuote($id){
        $blog = Blog::find($id);
        $blog->publication_status = 0;
        $blog->save();
        return redirect('/admin/manage-quotes')->with('message', 'Quote Unpublished');

    }

    public function publishedQuote($id){
        $blog = Blog::find($id);
        $blog->publication_status = 1;
        $blog->save();
        return redirect('/admin/manage-quotes')->with('message', 'Quote Unpublished');

    }

    public function deleteQuote ($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/admin/manage-quotes')->with('message', 'Selected Quote Deleted');
    }

    public function viewQuote($id){
        $blog = DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('blogs.id',$id)
            ->first();
        return view('admin.dashboard.view-quote', ['blog'=>$blog]);
    }

    public function backToManageQuote(){
        return redirect('/admin/manage-quotes');
    }

// Edit Quote Request Start
    public function editQuote($id){
        $blog = Blog::find($id);
        $category = Category::find($id);
        $author = Author::find($id);
        return view('admin.dashboard.modify-quote', [
            'blog'=>$blog,
            'category'=>$category,
            'author'=>$author
            ]);
    }
// Edit Quote Request End
// Update Quote Start
    public function updateQuote(Request $request){
        $blog = Blog::find($request->blog_id);
        $blog->category_id         = $request->category_id;
        $blog->author_id           = $request->author_id;
        $blog->quote_title         = $request->quote_title;
        $blog->quote_description   = $request->quote_description;
        $blog->publication_status  = $request->publication_status;
        $blog->save();
        return redirect('/admin/manage-quotes')->with('message', 'Selected Quote Deleted');
    }
// Update Quote End


}

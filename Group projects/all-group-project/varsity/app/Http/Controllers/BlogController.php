<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.add-blog');
    }
    
    public function saveBlog(Request $request){
        $this->Validate($request, [
            'blog_title'=>'required',
            'blog_writer'=>'required',
            'blog_published_date'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'blog_image'=>'required'
        ]);

        $blogImage = $request->file('blog_image');
        $imageName = $blogImage->getClientOriginalName();
        $directory = 'blog-images/';
        $imageURL = $directory.$imageName;
        Image::make($blogImage)->save($imageURL);

        $blog = new Blog();
        $blog->blog_title = $request->blog_title;
        $blog->blog_writer = $request->blog_writer;
        $blog->blog_published_date = $request->blog_published_date;
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->blog_image = $imageURL;
        $blog->publication_status = $request->publication_status;
        $blog->save();
        return redirect('/blog-info/add-blog')->with('message', 'Blog info saved successfully');
    }
    public function manageBlog(){
        $blogs = Blog::all();
        return view('admin.blog.manage-blog', ['blogs'=>$blogs]);
    }
    public function unpublishedBlog($id){
        $blog = Blog::find($id);
        $blog->publication_status=0;
        $blog->save();
        return redirect('/blog-info/manage-blog')->with('message', 'Blog info unpublished');
    }
    public function publishedBlog($id){
        $blog = Blog::find($id);
        $blog->publication_status=1;
        $blog->save();
        return redirect('/blog-info/manage-blog')->with('message', 'Blog info published');
    }
    public function deleteBlog($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blog-info/manage-blog')->with('message', 'Blog info deleted');
    }
    public function viewBlog($id){
        $blog = Blog::find($id);
        return view('admin.blog.view-blog', ['blog'=>$blog]);
    }
    public function editBlog($id){
        $blog = Blog::find($id);
        return view('admin.blog.edit-blog', ['blog'=>$blog]);
    }
    public function updateBlog(Request $request){
        if($request->blog_image){
            $blog = Blog::find($request->blog_id);
            unlink($blog->blog_image);

            $blogImage = $request->file('blog_image');
            $imageName = $blogImage->getClientOriginalName();
            $directory = 'blog-images/';
            $imageURL = $directory.$imageName;
            Image::make($blogImage)->save($imageURL);

            $blog->blog_title = $request->blog_title;
            $blog->blog_writer = $request->blog_writer;
            $blog->blog_published_date = $request->blog_published_date;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->blog_image = $imageURL;
            $blog->publication_status = $request->publication_status;
            $blog->save();
            return redirect('/blog-info/manage-blog')->with('message', 'Blog info updated');
        }else{
            $blog = Blog::find($request->blog_id);
            $blog->blog_title = $request->blog_title;
            $blog->blog_writer = $request->blog_writer;
            $blog->blog_published_date = $request->blog_published_date;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->publication_status = $request->publication_status;
            $blog->save();
            return redirect('/blog-info/manage-blog')->with('message', 'Blog info updated');
        }
    }
}

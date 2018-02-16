<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('admin.dashboard.add-author');
    }

    public function manageAuthor(){
        $author = Author::all();
        return view('admin.dashboard.manage-authors', ['author'=>$author]);
    }

    public function addNewAuthor(Request $request){
        $author = new Author();
        $author->author_name        = $request->author_name;
        $author->author_bio         = $request->author_bio;
        $author->publication_status = $request->publication_status;
        $author->save();

        return redirect('/admin/add-author')->with('message','Author Information Saved Successfully');
    }

    public function unpublishedAuthor($id){
        $author = Author::find($id);
        $author->publication_status=0;
        $author->save();
        return redirect('/admin/manage-authors')->with('message', 'Author Un-Published');
    }

    public function publishedAuthor($id){
        $author = Author::find($id);
        $author->publication_status=1;
        $author->save();
        return redirect('/admin/manage-authors')->with('message', 'Author Published');
    }

    public function editAuthor ($id){
        $author = Author::find($id);
        return view('admin.dashboard.update-author',['author'=>$author]);
    }

    public function updateAuthor (Request $request){

        $author = Author::find($request->author_id);
        $author->author_name        = $request->author_name;
        $author->author_bio         = $request->author_bio;
        $author->publication_status = $request->publication_status;
        $author->save();
        return redirect('/admin/manage-authors')->with('message','Author Information Updated Successfully');
    }

    public function deleteAuthor($id){
        $author = Author::find($id);
        $author->delete();
        return redirect('/admin/manage-authors')->with('message', 'Author Deleted from Database');
    }

}

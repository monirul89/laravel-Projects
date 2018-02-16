<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('admin.about.add-about');
    }
    public function manageAbout(){
        $abouts = About::all();
        return view('admin.about.manage-about', ['abouts'=>$abouts]);
    }
    public function saveAbout(Request $request){
        $this->Validate($request, [
            'about_us'=>'required'
        ]);

        $about = new About();
        $about->about_us = $request->about_us;
        $about->publication_status = $request->publication_status;
        $about->save();

        return redirect('/about/add-about')->with('message', 'About info added successfully');
    }
    public function unpublishedAbout($id){
        $about = About::find($id);
        $about->publication_status=0;
        $about->save();

        return redirect('/about/manage-about')->with('message', 'About info unpublished');
    }
    public function publishedAbout($id){
        $about = About::find($id);
        $about->publication_status=1;
        $about->save();

        return redirect('/about/manage-about')->with('message', 'About info published');
    }
    public function deleteAbout($id){
        $about = About::find($id);
        $about->delete();

        return redirect('/about/manage-about')->with('message', 'About info deleted');
    }
    public function editAbout($id){
        $about = About::find($id);

        return view('admin.about.edit-about', ['about'=>$about]);
    }
    public function updateAbout(Request $request){

        $about = About::find($request->about_id);
        $about->about_us = $request->about_us;
        $about->publication_status = $request->publication_status;
        $about->save();

        return redirect('/about/manage-about')->with('message', 'About info updated successfully');
    }
}

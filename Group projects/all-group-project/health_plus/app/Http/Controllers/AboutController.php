<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.about.add-about');
    }
    public function manageAbout(){
        $about = About::all();
        return view('admin.about.manage-about',['abouts'=>$about]);
    }
    public function saveAbout(Request $request){
        $this->Validate($request, [
            'about_name'=>'required|regex:/^[\pL\s\-]+$/u|min:2|max:25',
            'about_description'=>'required',
            'about_image' =>'required|image',
            'publication_status'=>'required'
        ]);


        $aboutImage = $request->file('about_image');
        $imageName = $aboutImage->getClientOriginalName();
        $directory= 'about-images/';
        $imageURL= $directory.$imageName;
        Image::make($aboutImage)->save($imageURL);


        $about = new About();
        $about->about_name = $request->about_name;
        $about->about_description = $request->about_description;
        $about->about_image = $imageURL;
        $about->publication_status = $request->publication_status;
        $about->save();

        return redirect('/about/add')->with('message', 'About Info Saved Successfully');
    }

    public function viewAbout($id){
        $about = About::find($id);
        return view('admin.about.view-about', ['about'=>$about]);
    }

    public function unpublishedAbout($id){
        $about = About::find($id);
        $about->publication_status=0;
        $about->save();
        return redirect('/about/manage')->with('message', 'About info unpublished');
    }

    public function publishedAbout($id){
        $about = About::find($id);
        $about->publication_status=1;
        $about->save();
        return redirect('/about/manage')->with('message', 'About info published');
    }

    public function deleteAbout($id){
        $about = About::find($id);
        $about->delete();
        return redirect('/about/manage')->with('message', 'About info deleted');
    }

    public function editAbout($id){
        $about = About::find($id);
        return view('admin.about.edit-about', ['about'=>$about]);

    }
    public function updateAbout(Request $request){

        if($request->about_image){
            $about = About::find($request->about_id);
            unlink($about->about_image);

            $aboutImage = $request->file('about_image');
            $imageName = $aboutImage->getClientOriginalName();
            $directory= 'about-images/';
            $imageURL= $directory.$imageName;
            Image::make($aboutImage)->save($imageURL);

            $about->about_name = $request->about_name;
            $about->about_description = $request->about_description;
            $about->about_image = $imageURL;
            $about->publication_status = $request->publication_status;
            $about->save();
            return redirect('/about/manage')->with('message', 'About info updated');

        }else{
            $about = About::find($request->about_id);
            $about->about_name = $request->about_name;
            $about->about_description = $request->about_description;
            $about->publication_status = $request->publication_status;
            $about->save();
            return redirect('/about/manage')->with('message', 'About info updated');
        }



    }
}

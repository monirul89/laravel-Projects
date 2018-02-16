<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Image;
use DB;

class AboutController extends Controller
{
    public function showAbout(){
        $about = About::find(1);
            return view('admin.about.about', ['about'=>$about]);
    }
    public function updateAbout(Request $request){

        $about_image = $request->file('about_image');
        if($about_image){
            $about = About::find($request->about_id);
            unlink($about->about_image);

            $imageName = $about_image->getClientOriginalName();
            $directory = 'food-image/';
            $imageUrl = $directory.$imageName;
            Image::make($about_image)->save($imageUrl);

            $about->heading           = $request->heading;
            $about->title             = $request->title;
            $about->short_description = $request->short_description;
            $about->long_description  = $request->long_description;
            $about->about_image = $imageUrl;
            $about->save();

            return redirect('/about/us/')->with('message', 'Updated Success');
        }else{
            $about = About::find($request->about_id);
//            $about = new About;
            $about->heading           = $request->heading;
            $about->title             = $request->title;
            $about->short_description = $request->short_description;
            $about->long_description  = $request->long_description;
            $about->save();

            return redirect('/about/us/')->with('message', 'Updated Success');
        }

    }

}

<?php

namespace App\Http\Controllers;

use App\About;
use Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout(){
        $about = About::find(1);
        return view('admin.about.about', ['about'=>$about]);
    }
    protected function saveAboutBasicInfo($request,$about){
        $about->choose_me         = $request->choose_me;
        $about->what_get          = $request->what_get;
        $about->my_skill          = $request->my_skill;
        $about->main_description  = $request->main_description;
        $about->save();
    }
    public function updateAbout(Request $request){

        $about_image = $request->file('about_image');
        $about = About::find($request->about_id);
        if($about_image){
            unlink($about->about_image);

            $imageName = $about_image->getClientOriginalName();
            $directory = 'portfolio-images/';
            $imageUrl = $directory.$imageName;
            Image::make($about_image)->save($imageUrl);
            $about->about_image = $imageUrl;

            $this->saveAboutBasicInfo($request,$about);

            return redirect('/about/me')->with('message', 'Updated Success');
        }else{
            $this->saveAboutBasicInfo($request,$about);

            return redirect('/about/me')->with('message', 'Updated Success');
        }

    }
}

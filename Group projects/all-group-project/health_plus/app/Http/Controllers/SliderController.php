<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.slider.add-slider');
    }

    public function manageSlider(){
        $slider = Slider::all();
        return view('admin.slider.manage-slider',['sliders'=>$slider]);
    }

    public function saveSlider(Request $request){
        $this->Validate($request, [
            'slider_title'=>'required|regex:/^[\pL\s\-]+$/u|min:2|max:25',
            'slider_sort_title'=>'required',
            'slider_description'=>'required',
            'slider_image' =>'required|image',
            'publication_status'=>'required'
        ]);


        $sliderImage = $request->file('slider_image');
        $imageName = $sliderImage->getClientOriginalName();
        $directory= 'slider-images/';
        $imageURL= $directory.$imageName;
        Image::make($sliderImage)->save($imageURL);


        $slider = new Slider();
        $slider->slider_title = $request->slider_title;
        $slider->slider_sort_title = $request->slider_sort_title;
        $slider->slider_description = $request->slider_description;
        $slider->slider_image = $imageURL;
        $slider->publication_status = $request->publication_status;
        $slider->save();

        return redirect('/add-slider')->with('message', 'Slider Info Saved Successfully');
    }

    public function unpublishedSlider($id){
        $slider = Slider::find($id);
        $slider->publication_status=0;
        $slider->save();
        return redirect('/manage-slider')->with('message', 'Slider info unpublished');
    }

    public function publishedSlider($id){
        $slider = Slider::find($id);
        $slider->publication_status=1;
        $slider->save();
        return redirect('/manage-slider')->with('message', 'Slider info published');
    }

    public function deleteSlider($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('/manage-slider')->with('message', 'Slider info Deleted');
    }

    public function editSlider($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit-slider', ['slider'=>$slider]);

    }

    public function updateSlider(Request $request){

        if($request->slider_image){
            $slider =Slider::find($request->slider_id);
            unlink($slider->slider_image);

            $sliderImage = $request->file('slider_image');
            $imageName = $sliderImage->getClientOriginalName();
            $directory= 'slider-images/';
            $imageURL= $directory.$imageName;
            Image::make($sliderImage)->save($imageURL);

            $slider->slider_title = $request->slider_title;
            $slider->slider_sort_title = $request->slider_sort_title;
            $slider->slider_description = $request->slider_description;
            $slider->slider_image = $imageURL;
            $slider->publication_status = $request->publication_status;
            $slider->save();
            return redirect('/manage-slider')->with('message', 'Slider info updated');

        }else{
            $slider = Slider::find($request->slider_id);
            $slider->slider_title = $request->slider_title;
            $slider->slider_sort_title = $request->slider_sort_title;
            $slider->slider_description = $request->slider_description;
            $slider->publication_status = $request->publication_status;
            $slider->save();
            return redirect('/manage-slider')->with('message', 'Slider info updated');
        }



    }
}

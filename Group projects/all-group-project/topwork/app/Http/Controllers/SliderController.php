<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function newSlider(){
        return view('admin.slider.new-slider');
    }
    public function manageSlider(){
        return view('admin.slider.manage-slider');
    }

}

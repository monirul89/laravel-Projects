<?php

namespace App\Http\Controllers;

use App\About;
use App\Department;
use App\Menu;
use App\Service;
use App\Slider;
use App\Team;
use App\Welcome;
use Illuminate\Http\Request;

class HealthPlusController extends Controller
{
    public function index(){
        $welcome = Welcome::where('publication_status', 1)->first();
        $departments = Department::where('publication_status', 1)->get();
        $sliders = Slider::where('publication_status', 1)->get();
        return view('front-end.home.home', [
            'welcome'=>$welcome,
            'departments'=>$departments,
            'sliders'=>$sliders

        ]);
    }

//    public function menuShow($id){
//        $menus = Menu::where('id', $id)
//            ->where('publication_status', 1)
//            ->orderBy('id')
//            ->get();
//        return view('front-end.home.home', ['menus'=>$menus]);
//    }

    public function contact(){
        return view('front-end.contact.contact');
    }

    public function about(){
        $abouts = About::where('publication_status', 1)->first();
        $services =Service::where('publication_status', 1)->get();
        return view('front-end.about.about',[
            'abouts'=>$abouts,
            'services'=>$services

        ]);
    }

    public function appointment(){
        return view('front-end.appointment.appointment');
    }

    public function gallery(){
        $departments = Department::where('publication_status', 1)->get();
        $teams = Team::where('publication_status', 1)->get();
        return view('front-end.gallery.gallery', [
            'departments'=>$departments,
            'teams'=>$teams
        ]);
    }

    public function team(){
        $teams = Team::where('publication_status', 1)->get();
        return view('front-end.team.team', ['teams'=>$teams]);
    }


    public function departments(){
        $departments = Department::where('publication_status', 1)->get();
        return view('front-end.departments.departments', ['departments'=>$departments]);
    }

}

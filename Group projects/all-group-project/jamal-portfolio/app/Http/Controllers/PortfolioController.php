<?php

namespace App\Http\Controllers;

use App\About;
use App\Service;
use DB;
use App\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $projects = DB::table('projects')
            ->join('services','projects.service_id','=','services.id')
            ->select('projects.*','services.service_name')
            ->orderBy('id','DESC')->take(6)
            ->get();
        $about = About::find(1);
        return view('front-end.home.home',[
            'projects'  =>$projects,
            'about'  =>$about,
            ]);
    }
    public function about(){
        $about = About::find(1);
        return view('front-end.about.about',['about'  =>$about]);
    }
    public function services(){
        $services = Service::all();
        return view('front-end.services.services',['services'=>$services]);
    }
    public function error(){
        return view('front-end.pages.error404');
    }
    public function gallery(){
        $projects = Project::where('publication_status',1)
                    ->orderBy('id','DESC')->take(6)
                    ->get();
        return view('front-end.pages.gallery',['projects'  =>$projects]);
    }
    public function blogFullWidth(){
        return view('front-end.blog.blog-full-width');
    }
    public function blogLeftSidebar(){
        return view('front-end.blog.blog-left-sidebar');
    }
    public function blogRightSidebar(){
        return view('front-end.blog.blog-right-sidebar');
    }
    public function contactMe(){
        return view('front-end.contact.contact-me');
    }
    public function singleProject($id){
        $project = Project::find($id);
        return view('front-end.project.single-project',['project'=>$project]);
    }
    public function singlePost(){
        return view('front-end.post.single-post');
    }

}

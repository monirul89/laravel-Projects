<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class TopworkController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('front-end.home.home',['services'=>$services]);
    }

    public function blog(){
        return view('front-end.blog.blog');
    }
    public function contact(){
        return view('front-end.contact.contact');
    }

    public function addJob(){
        return view('front-end.add-job.add-job');
    }




}

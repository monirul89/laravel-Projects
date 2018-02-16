<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalServices = Service::count();
        $totalProjects = Project::count();
        return view('admin.home.home', [
            'totalServices'=>$totalServices,
            'totalProjects'=>$totalProjects
        ]);
    }
}

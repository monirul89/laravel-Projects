<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class JobPageController extends Controller
{
    //    front-e page job pages Employees

    public function jobPage(){
        return view('front-end.job-pages.job-page');
    }
     public function pageAltPage(){
        return view('front-end.job-pages.job-page-alt');
    }
    public function resumePage(){
        return view('front-end.job-pages.resume-page');
    }
    public function shortcodesPage(){
        return view('front-end.job-pages.shortcodes');
    }
    public function iconsPage(){
        return view('front-end.job-pages.icons');
    }
    public function pricingTablesPage(){
        return view('front-end.job-pages.pricing-tables');
    }

//    admin panel page job pages Employees

    public function newJobEmployee(){
        return view('admin.services.add-job');
    }
    public function managesJobEmployee(){
        return view('admin.services.manage-job');
    }
    public function appManageEmployee(){
        return view('admin.manage.manage-applications');
    }
    public function browseResumeEmployee(){
        $candidates = Candidate::all();
        return view('admin.services.browse-resumes',['candidates'=>$candidates]);
    }
    public function manageResumeEmployee(){
        $candidates = Candidate::all();
        return view('admin.manage.manage-resume',['candidates'=>$candidates]);
    }






}

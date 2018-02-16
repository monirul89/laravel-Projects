<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployersController extends Controller
{
    public function manageJob(){
        return view('front-end.add-job.manage-jobs');
    }
    public function applicationsJob(){
        return view('front-end.add-job.manage-applications');
    }
    public function browseJob(){
        return view('front-end.add-job.browse-resumes');
    }

}

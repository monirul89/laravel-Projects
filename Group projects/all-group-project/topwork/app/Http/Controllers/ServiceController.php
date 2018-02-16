<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function newJob(Request $request){
        $services = new Service();
        $services->company_name = $request->company_name;
        $services->job_title = $request->job_title;
        $services->last_education = $request->last_education;
        $services->experience = $request->experience;
        $services->job_category = $request->job_category;
        $services->salary_range = $request->salary_range;
        $services->job_description = $request->job_description;
        $services->publication_status = $request->publication_status;
        $services->save();

        return redirect('job/new')->with('message', 'New Job Post Success');
    }

    public function jobDetails($id){
        $services = Service::find($id);
        return view('front-end.view-job.view-job',['services'=>$services]);
    }
}

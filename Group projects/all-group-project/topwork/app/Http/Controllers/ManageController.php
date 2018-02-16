<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Service;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function unpublishedResume($id){
        $candidate = Candidate::find($id);
        $candidate->publication_status = 0;
        $candidate->save();
        return redirect('/resume/manage')->with('message','Your content unpublished');
    }
    public function publishedResume($id){
        $candidate = Candidate::find($id);
        $candidate->publication_status = 1;
        $candidate->save();
        return redirect('/resume/manage')->with('message','Your content published');
    }
    public function manageCancel(){
        return view('admin.dashboard.home');
    }

    public function manageJob(){
        $services = Service::all();
        return view('admin.manage.manage-job',['services'=>$services]);
    }

    public function unpublishedJob($id){
        $service = Service::find($id);
        $service->publication_status = 1;
        $service->save();
        return redirect('/job/manage')->with('message','Your content unpublished');
    }
    public function publishedJob($id){
        $service = Service::find($id);
        $service->publication_status = 0;
        $service->save();
        return redirect('/job/manage')->with('message','Your content published');
    }

}

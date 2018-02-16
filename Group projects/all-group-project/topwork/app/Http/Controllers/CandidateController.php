<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Image;
use DB;
class CandidateController extends Controller
{
    public function index(){
        return view('front-end.candidate.browse-jobs');
    }

     public function browseCategories(){
        return view('front-end.candidate.browse-categories');
    }
    public function addResumeCandidates(){
        return view('front-end.candidate.add-resume');
    }
    public function manageResumeCandidates(){
        return view('front-end.candidate.manage-resumes');
    }
    public function jobAlertsCandidates(){
        return view('front-end.candidate.job-alerts');
    }


    //    admin panel page job pages Employees

    public function newResume(){
        return view('admin.candidates.add-resume');
    }
    public function saveProfileCandidates(Request $request){

//        $candidate = new Candidate();
//        $candidate_image = $request->file('candidate_image');
//        $candidate_image_name = $candidate_image->getClientOriginalName();
//        $directory = 'images/';
//        $imageUrl = $directory.$candidate_image_name;
//        $candidate_image->move($directory, $candidate_image_name);


        $candidate = new Candidate();
        $candidate_image = $request->file('candidate_image');
        $candidate_image_name = $candidate_image->getClientOriginalName();
        $directory = 'images/';
        $imageUrl = $directory.$candidate_image_name;
        Image::make($candidate_image)->save($imageUrl);


        $candidate->candidate_name = $request->candidate_name;
        $candidate->selected_skill = $request->selected_skill;
        $candidate->candidate_email = $request->candidate_email;
        $candidate->resume_description = $request->resume_description;
        $candidate->candidate_image = $imageUrl;
        $candidate->publication_status = $request->publication_status;

        $candidate->save();

        return redirect('/resume/new')->with('message','Your Profile Add');
    }

    public function updateprofile(Request $request){

        $candidate = Candidate::find($request->candidate_id);

        if ($request->candidate_image==''){
        $candidate->candidate_name = $request->candidate_name;
        $candidate->selected_skill = $request->selected_skill;
        $candidate->candidate_email = $request->candidate_email;
        $candidate->resume_description = $request->resume_description;
        $candidate->publication_status = $request->publication_status;

        $candidate->save();
        }
        else{
            unlink($candidate->candidate_image);

            $candidate_image = $request->file('candidate_image');
            $candidate_image_name = $candidate_image->getClientOriginalName();
            $directory = 'images/';
            $imageUrl = $directory.$candidate_image_name;
            Image::make($candidate_image)->save($imageUrl);
            $candidate->candidate_name = $request->candidate_name;
            $candidate->selected_skill = $request->selected_skill;
            $candidate->candidate_email = $request->candidate_email;
            $candidate->resume_description = $request->resume_description;
            $candidate->candidate_image = $imageUrl;
            $candidate->publication_status = $request->publication_status;

            $candidate->save();
        }
        return redirect('/profile/update')->with('message','Your Profile Updated');
    }


    public function updateResume($id){
        $candidates = DB::table('candidates')->where('candidate_id', $id)->get();
        return view('admin.candidates.update-resume',['candidates'=>$candidates]);
    }




    public function browsejobCandidates(){
        return view('admin.candidates.browse-job');
    }

    public function managesJobCandidates(){
        return view('admin.candidates.manage-resume');
    }
    public function browsingCategory(){
        return view('admin.candidates.browsing-category');
    }




}

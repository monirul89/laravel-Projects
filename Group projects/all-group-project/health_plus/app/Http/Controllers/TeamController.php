<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Image;

class TeamController extends Controller
{
    public function addTeam(){
        return view('admin.team.add-team');
    }

    public function manageTeam(){
        $team = Team::all();
        return view('admin.team.manage-team',['teams'=>$team]);
    }

    public function saveTeam(Request $request){
        $this->Validate($request, [
            'team_title'=>'required|regex:/^[\pL\s\-]+$/u|min:2|max:25',
            'short_description'=>'required',
            'doctor_name'=>'required',
            'doctor_speciality'=>'required',
            'doctor_consultant'=>'required',
            'doctor_image' =>'required|image',
            'publication_status'=>'required'
        ]);


        $teamImage = $request->file('doctor_image');
        $imageName = $teamImage->getClientOriginalName();
        $directory= 'team-images/';
        $imageURL= $directory.$imageName;
        Image::make($teamImage)->save($imageURL);


        $team = new Team();
        $team->team_title = $request->team_title;
        $team->short_description = $request->short_description;
        $team->doctor_name = $request->doctor_name;
        $team->doctor_speciality = $request->doctor_speciality;
        $team->doctor_consultant = $request->doctor_consultant;
        $team->doctor_image = $imageURL;
        $team->publication_status = $request->publication_status;
        $team->save();

        return redirect('/add-team')->with('message', 'Team Info Saved Successfully');
    }

    public function unpublishedTeam($id){
        $team = Team::find($id);
        $team->publication_status=0;
        $team->save();
        return redirect('/manage-team')->with('message', 'Team info unpublished');
    }

    public function publishedTeam($id){
        $team = Team::find($id);
        $team->publication_status=1;
        $team->save();
        return redirect('/manage-team')->with('message', 'Team info published');
    }

    public function deleteTeam($id){
        $team = Team::find($id);
        $team->delete();
        return redirect('/manage-team')->with('message', 'Team info deleted');
    }

    public function editTeam($id){
        $team = Team::find($id);
        return view('admin.team.edit-team', ['team'=>$team]);

    }
    public function updateTeam(Request $request){

        if($request->doctor_image){
            $team = Team::find($request->team_id);
            unlink($team->doctor_image);

            $teamImage = $request->file('doctor_image');
            $imageName = $teamImage->getClientOriginalName();
            $directory= 'team-images/';
            $imageURL= $directory.$imageName;
            Image::make($teamImage)->save($imageURL);


            $team->team_title = $request->team_title;
            $team->short_description = $request->short_description;
            $team->doctor_name = $request->doctor_name;
            $team->doctor_speciality = $request->doctor_speciality;
            $team->doctor_consultant = $request->doctor_consultant;
            $team->doctor_image = $imageURL;
            $team->publication_status = $request->publication_status;
            $team->save();
            return redirect('/manage-team')->with('message', 'Team info updated');

        }else{
            $team = Team::find($request->team_id);
            $team->team_title = $request->team_title;
            $team->short_description = $request->short_description;
            $team->doctor_name = $request->doctor_name;
            $team->doctor_speciality = $request->doctor_speciality;
            $team->doctor_consultant = $request->doctor_consultant;
            $team->publication_status = $request->publication_status;
            $team->save();
            return redirect('/manage-team')->with('message', 'Team info updated');
        }



    }
}

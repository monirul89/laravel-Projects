<?php

namespace App\Http\Controllers;

use App\Addcontent;
use Illuminate\Http\Request;

class addContentController extends Controller
{
    public function addContent(){
        return view('admin.home.content-add');
    }

    public function saveContent(Request $request){
        $addcontent = new Addcontent();
        $addcontent->vission_title = $request->vission_title;
        $addcontent->vission_content = $request->vission_content;
        $addcontent->mission_title = $request->mission_title;
        $addcontent->mission_content = $request->mission_content;
        $addcontent->goal_title = $request->goal_title;
        $addcontent->goal_content = $request->goal_content;
        $addcontent->published_status = $request->published_status;
        $addcontent->save();
        $message = "success";
        return view('admin.home.content-add');
    }

    public function manageContent(){
        $addContents = Addcontent::all();
        return view('admin.home.content-manage',['addContents'=>$addContents]);
    }
    public function unpublishedHomeContent($id){
        $addContents = Addcontent::find($id);
        $addContents->published_status = 0;
        $addContents->save();
        return redirect('/manage/content')->with('message','Your content unpublished');
    }
    public function publishedHomeContent($id){
        $addContents = Addcontent::find($id);
        $addContents->published_status = 1;
        $addContents->save();
        return redirect('/manage/content')->with('message','Your content published');
    }
    public function editVissionContent($id){
        $addcontent = Addcontent::find($id);
        return view('admin.home.vission-edit',['addcontent'=>$addcontent]);
    }
    public function editMissionContent($id){
        $addcontent = Addcontent::find($id);
        return view('admin.home.mission-edit',['addcontent'=>$addcontent]);
    }
    public function editGoalContent($id){
        $addcontent = Addcontent::find($id);
        return view('admin.home.goal-edit',['addcontent'=>$addcontent]);
    }

}

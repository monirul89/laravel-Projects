<?php

namespace App\Http\Controllers;

use App\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function addWelcome(){
        return view('admin.welcome.add-welcome');
    }

    public function manageWelcome(){
        $welcome = Welcome::all();
        return view('admin.welcome.manage-welcome',['welcomes'=>$welcome]);
    }

    public function saveWelcome(Request $request){
        $this->Validate($request, [
            'welcome_title'=>'required',
            'welcome_description'=>'required',
            'publication_status'=>'required'
        ]);


        $welcome = new Welcome();
        $welcome->welcome_title = $request->welcome_title;
        $welcome->welcome_description = $request->welcome_description;
        $welcome->publication_status = $request->publication_status;
        $welcome->save();

        return redirect('/add-welcome')->with('message', 'Welcome Info Saved Successfully');
    }

    public function unpublishedWelcome($id){
        $welcome = Welcome::find($id);
        $welcome->publication_status=0;
        $welcome->save();
        return redirect('/manage-welcome')->with('message', 'Welcome info unpublished');
    }

    public function publishedWelcome($id){
        $welcome = Welcome::find($id);
        $welcome->publication_status=1;
        $welcome->save();
        return redirect('/manage-welcome')->with('message', 'Welcome info published');
    }

    public function deleteWelcome($id){
        $welcome = Welcome::find($id);
        $welcome->delete();
        return redirect('/manage-welcome')->with('message', 'Welcome info deleted');
    }

    public function editWelcome($id){
        $welcome = Welcome::find($id);
        return view('admin.welcome.edit-welcome', ['welcome'=>$welcome]);

    }
    public function updateWelcome(Request $request){
        $welcome = Welcome::find($request->welcome_id);
        $welcome->welcome_title = $request->welcome_title;
        $welcome->welcome_description = $request->welcome_description;
        $welcome->publication_status = $request->publication_status;
        $welcome->save();

        return redirect('/manage-welcome')->with('message', 'Welcome info updated');
    }
}

<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use Image;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $services = Service::where('publication_status',1)->take(4)->get();
        return view('admin.project.add-project',[
            'services'=>$services,
        ]);
    }
    protected function projectImageUpload($projectImage){
        $imageName = $projectImage->getClientOriginalName();
        $directory = 'portfolio-images/';
        $imageUrl = $directory.$imageName;
        $image = Image::make($projectImage)->resize(600, 500);
        $image-> save($imageUrl);
        return $imageUrl;
    }

    protected function saveProjectBasicInfo($request,$project){
        $project -> service_id          = $request -> service_id;
        $project -> project_name        = $request -> project_name;
        $project -> project_description = $request -> project_description;
        $project -> publication_status  = $request -> publication_status;
        $project -> save();
    }

    protected function projectInfoValidate($request){
        $this->validate($request,[
            'service_id'=>'required',
            'project_name'=>'required|max:100',
            'project_description'=>'required|max:50000',
        ]);
    }

    public function saveProject(Request $request){

        $this->projectInfoValidate($request);
        $this->validate($request,['project_image'=>'required|image']);
        $projectImage = $request->file('project_image');
        $imageUrl = $this->projectImageUpload($projectImage);
        $project = new Project();
        $project -> project_image       = $imageUrl;
        $this->saveProjectBasicInfo($request,$project);
        return redirect('/project/add-project')->with('message','Project info save success');
    }

    public function manageProject(){

        $projects = DB::table('projects')
            ->join('services','projects.service_id','=','services.id')
            ->select('projects.*','services.service_name')
            ->get();

        return view('admin.project.manage-project',['projects'=>$projects]);
    }

    public function viewProject($id){
        $project = Project::find($id);
        return view('admin.project.view-project',['project'=>$project]);
    }

    public function unpublishedProject($id){
        $project = Project::find($id);
        $project->publication_status= 0;
        $project->save();

        return redirect('/project/manage-project')->with('message','Project info Unpublished');
    }
    public function publishedProject($id){
        $project = Project::find($id);
        $project->publication_status= 1;
        $project->save();

        return redirect('/project/manage-project')->with('message','Project info Published');
    }

    public function editProject($id){
        $services = Service::where('publication_status',1)->take(4)->get();

        return view('admin.project.edit-project',[
            'project'=>Project::find($id),
            'services'=>$services,
        ]);
    }
    public function updateProject(Request $request){
        $this->projectInfoValidate($request);
        $this->validate($request,['project_image'=>'image']);

        $projectImage = $request->file('project_image');
        if($projectImage){
            $project = Project::find($request->project_id);
            unlink($project->project_image);

            $imageUrl = $this->projectImageUpload($projectImage);
            $project -> project_image       = $imageUrl;
            $this->saveProjectBasicInfo($request,$project);

            return redirect('/project/manage-project')->with('message','Project info Updated');

        }else{
            $project = Project::find($request->project_id);

            $this->saveProjectBasicInfo($request,$project);

            return redirect('/project/manage-project')->with('message','Project info Updated');
        }


    }

    public function deleteProject($id){
        $project = Project::find($id);
        $project->delete();

        return redirect('/project/manage-project')->with('message','Project info deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('admin.skill.add-skill');
    }
    public function manageskill(){
        $skills = Skill::all();
        return view('admin.skill.manage-skill', ['skills'=>$skills]);
    }
    public function saveSkill(Request $request){
        $this->Validate($request, [
            'skill_field'=>'required',
            'skill_percent'=>'required|integer|between:1,100'
        ]);

        $skill = new Skill();
        $skill->skill_field = $request->skill_field;
        $skill->skill_percent = $request->skill_percent;
        $skill->publication_status = $request->publication_status;
        $skill->save();

        return redirect('/skill/add-skill')->with('message', 'Skill info added successfully');
    }
    public function unpublishedSkill($id){
        $skill = Skill::find($id);
        $skill->publication_status=0;
        $skill->save();

        return redirect('/skill/manage-skill')->with('message', 'Skill info unpublished');
    }
    public function publishedSkill($id){
        $skill = Skill::find($id);
        $skill->publication_status=1;
        $skill->save();

        return redirect('/skill/manage-skill')->with('message', 'Skill info published');
    }
    public function deleteSkill($id){
        $skill = Skill::find($id);
        $skill->delete();

        return redirect('/skill/manage-skill')->with('message', 'Skill info deleted');
    }
    public function editSkill($id){
        $skill = Skill::find($id);

        return view('admin.skill.edit-skill', ['skill'=>$skill]);
    }
    public function updateSkill(Request $request){
        $this->Validate($request, [
            'skill_field'=>'required',
            'skill_percent'=>'required|integer|between:1,100'
        ]);

        $skill = skill::find($request->skill_id);
        $skill->skill_field = $request->skill_field;
        $skill->skill_percent = $request->skill_percent;
        $skill->publication_status = $request->publication_status;
        $skill->save();

        return redirect('/skill/manage-skill')->with('message', 'Skill info updated successfully');
    }
}

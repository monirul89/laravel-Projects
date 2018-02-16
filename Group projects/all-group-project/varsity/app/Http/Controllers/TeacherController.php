<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Image;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.teacher.add-teacher');
    }
    public function manageTeacher(){
        $teachers = Teacher::all();
        return view('admin.teacher.manage-teacher', ['teachers'=>$teachers]);
    }
    public function saveTeacher(Request $request){
        $this->Validate($request, [
            'teacher_name'=>'required',
            'teacher_email'=>'required',
            'teacher_designation'=>'required',
            'teacher_image'=>'required'
        ]);

    // Image Upload Start with Intervention IO //
        $teacherImage = $request->file('teacher_image');
        $imageName = $teacherImage->getClientOriginalName();
        $directory = 'teacher-images/';
        $imageURL = $directory.$imageName;
        Image::make($teacherImage)->save($imageURL);

        $teacher = new Teacher();
        $teacher->teacher_name = $request->teacher_name;
        $teacher->teacher_email = $request->teacher_email;
        $teacher->teacher_designation = $request->teacher_designation;
        $teacher->teacher_image = $imageURL;
        $teacher->publication_status = $request->publication_status;
        $teacher->save();

        return redirect('/add-teacher')->with('message', 'Teacher info save successfully');
    }

    public function unpublishedTeacher($id){
        $teacher = Teacher::find($id);
        $teacher->publication_status=0;
        $teacher->save();
        return redirect('/manage-teacher')->with('message', 'Teacher info unpublished');

    }

    public function publishedTeacher($id){
        $teacher = Teacher::find($id);
        $teacher->publication_status=1;
        $teacher->save();
        return redirect('/manage-teacher')->with('message', 'Teacher info published');

    }

    public function deleteTeacher($id){
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('/manage-teacher')->with('message', 'Teacher info deleted');
    }
    public function editTeacher($id){
        $teacher = Teacher::find($id);
        return view('admin.teacher.edit-teacher', ['teacher'=>$teacher]);
    }
    public function updateTeacher(Request $request){
        if($request->teacher_image){
            $teacher = Teacher::find($request->teacher_id);
            unlink($teacher->teacher_image);
            $teacherImage = $request->file('teacher_image');
            $imageName = $teacherImage->getClientOriginalName();
            $directory = 'teacher-images/';
            $imageURL = $directory.$imageName;
            Image::make($teacherImage)->save($imageURL);

            $teacher->teacher_name = $request->teacher_name;
            $teacher->teacher_email = $request->teacher_email;
            $teacher->teacher_designation = $request->teacher_designation;
            $teacher->teacher_image = $imageURL;
            $teacher->publication_status = $request->publication_status;
            $teacher->save();
            return redirect('/manage-teacher')->with('message', 'Teacher info updated');

        }else{
            $teacher = Teacher::find($request->teacher_id);
            $teacher->teacher_name = $request->teacher_name;
            $teacher->teacher_email = $request->teacher_email;
            $teacher->teacher_designation = $request->teacher_designation;
            $teacher->publication_status = $request->publication_status;
            $teacher->save();
            return redirect('/manage-teacher')->with('message', 'Teacher info updated');
        }
    }
}

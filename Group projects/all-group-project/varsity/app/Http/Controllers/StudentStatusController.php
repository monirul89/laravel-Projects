<?php

namespace App\Http\Controllers;

use App\StudentStatus;
use Illuminate\Http\Request;

class StudentStatusController extends Controller
{
    public function index(){
        return view('admin.student-status.add-student-status');
    }
    public function manageStudentStatus(){
        $studentStatuses = StudentStatus::all();
        return view('admin.student-status.manage-student-status', ['studentStatuses'=>$studentStatuses]);
    }
    public function saveStudentStatus(Request $request){
        $this->Validate($request, [
            'student_status'=>'required'
        ]);

        $studentStatus = new StudentStatus();
        $studentStatus->student_status = $request->student_status;
        $studentStatus->publication_status = $request->publication_status;
        $studentStatus->save();
        return redirect('/student-status/add-student-status')->with('message', 'Student status info saved successfully');
    }
    public function unpublishedStudentStatus($id){
        $studentStatus = StudentStatus::find($id);
        $studentStatus->publication_status=0;
        $studentStatus->save();
        return redirect('/student-status/manage-student-status')->with('message', 'Student status info unpublished');
    }
    public function publishedStudentStatus($id){
        $studentStatus = StudentStatus::find($id);
        $studentStatus->publication_status=1;
        $studentStatus->save();
        return redirect('/student-status/manage-student-status')->with('message', 'Student status info published');
    }
    public function deleteStudentStatus($id){
        $studentStatus = StudentStatus::find($id);
        $studentStatus->delete();
        return redirect('/student-status/manage-student-status')->with('message', 'Student status info deleted');
    }
    public function editStudentStatus($id){
        $studentStatus = StudentStatus::find($id);
        return view('admin.student-status.edit-student-status', ['studentStatus'=>$studentStatus]);
    }
    public function updateStudentStatus(Request $request){
        $studentStatus = StudentStatus::find($request->student_status_id);
        $studentStatus->student_status = $request->student_status;
        $studentStatus->publication_status = $request->publication_status;
        $studentStatus->save();
        return redirect('/student-status/manage-student-status')->with('message', 'Student status info updated');
    }
}

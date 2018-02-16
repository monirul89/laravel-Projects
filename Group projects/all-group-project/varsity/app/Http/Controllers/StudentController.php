<?php

namespace App\Http\Controllers;

use App\Department;
use App\Student;
use App\StudentStatus;
use Illuminate\Http\Request;
use DB;
use Image;

class StudentController extends Controller
{
    public function index(){
        $departments = Department::where('publication_status', 1)->get();
        $studentStatuses = StudentStatus::where('publication_status', 1)->get();
        return view('admin.student.add-student', [
            'departments'=>$departments,
            'studentStatuses'=>$studentStatuses
        ]);
    }
    public function manageStudent(){
        $students = DB::table('students')
            ->join('departments', 'students.department_id','=','departments.id')
            ->join('student_statuses', 'students.student_status_id','=','student_statuses.id')
            ->select('students.*','departments.department_name','student_statuses.student_status')
            ->get();
        return view('admin.student.manage-student', ['students'=>$students]);
    }
    public function saveStudent(Request $request){
        $this->Validate($request, [
            'student_name'=>'required',
            'department_id'=>'required',
            'student_status_id'=>'required',
            'students_comment'=>'required',
            'student_image'=>'required'
        ]);

        $studentImage = $request->file('student_image');
        $imageName = $studentImage->getClientOriginalName();
        $directory = 'student-images/';
        $imageURL = $directory.$imageName;
        Image::make($studentImage)->save($imageURL);

        $student = new Student();
        $student->student_name = $request->student_name;
        $student->department_id = $request->department_id;
        $student->student_status_id = $request->student_status_id;
        $student->students_comment = $request->students_comment;
        $student->student_image = $imageURL;
        $student->publication_status = $request->publication_status;
        $student->save();
        return redirect('/student/add-student')->with('message', 'Student info added successfully');
    }
    public function unpublishedStudent($id){
        $student = Student::find($id);
        $student->publication_status=0;
        $student->save();
        return redirect('/student/manage-student')->with('message', 'Student info unpublished');
    }
    public function publishedStudent($id){
        $student = Student::find($id);
        $student->publication_status=1;
        $student->save();
        return redirect('/student/manage-student')->with('message', 'Student info published');
    }
    public function deleteStudent($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/student/manage-student')->with('message', 'Student info deleted');
    }
    public function editStudent($id){
        $student = Student::find($id);
        $departments = Department::where('publication_status', 1)->get();
        $studentStatuses = StudentStatus::where('publication_status', 1)->get();
        return view('admin.student.edit-student', [
            'student'=>$student,
            'departments'=>$departments,
            'studentStatuses'=>$studentStatuses
        ]);
    }
    public function updateStudent(Request $request){
        if($request->student_image){
            $student = Student::find($request->student_id);
            unlink($student->student_image);

            $studentImage = $request->file('student_image');
            $imageName = $studentImage->getClientOriginalName();
            $directory = 'student-images/';
            $imageURL = $directory.$imageName;
            Image::make($studentImage)->save($imageURL);

            $student->student_name = $request->student_name;
            $student->department_id = $request->department_id;
            $student->student_status_id = $request->student_status_id;
            $student->students_comment = $request->students_comment;
            $student->student_image = $imageURL;
            $student->publication_status = $request->publication_status;
            $student->save();
            return redirect('/student/manage-student')->with('message', 'Student info updated successfully');
        }else{
            $student = Student::find($request->student_id);
            $student->student_name = $request->student_name;
            $student->department_id = $request->department_id;
            $student->student_status_id = $request->student_status_id;
            $student->students_comment = $request->students_comment;
            $student->publication_status = $request->publication_status;
            $student->save();
            return redirect('/student/manage-student')->with('message', 'Student info updated successfully');
        }
    }
}

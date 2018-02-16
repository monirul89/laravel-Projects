<?php

namespace App\Http\Controllers;

use App\Course;
use App\Teacher;
use Illuminate\Http\Request;
use DB;
use Image;

class CourseController extends Controller
{
    public function index(){
        $teachers = Teacher::where('publication_status', 1)->get();
        return view('admin.course.add-course', ['teachers'=>$teachers]);
    }
    public function manageCourse(){
        $courses = DB::table('courses')
            ->join('teachers', 'courses.teacher_id','=','teachers.id')
            ->select('courses.*','teachers.teacher_name')
            ->get();

        return view('admin.course.manage-course', ['courses'=>$courses]);
    }
    public function saveCourse(Request $request){
        $this->Validate($request, [
            'course_title'=>'required',
            'teacher_id'=>'required',
            'course_price'=>'required|numeric',
            'short_description'=>'required',
            'long_description'=>'required',
            'course_image'=>'required'
        ]);


        $courseImage = $request->file('course_image');
        $imageName = $courseImage->getClientOriginalName();
        $directory = 'course-images/';
        $imageURL = $directory.$imageName;
        Image::make($courseImage)->save($imageURL);

        $course = new Course();
        $course->course_title = $request->course_title;
        $course->teacher_id = $request->teacher_id;
        $course->course_price = $request->course_price;
        $course->short_description = $request->short_description;
        $course->long_description = $request->long_description;
        $course->course_image = $imageURL;
        $course->publication_status = $request->publication_status;
        $course->save();
        return redirect('/Course-info/add-course')->with('message', 'Course info added successfully');

    }
    public function unpublishedCourse($id){
        $course = Course::find($id);
        $course->publication_status = 0;
        $course->save();
        return redirect('/Course-info/manage-course')->with('message', 'Course info unpublished');
    }
    public function publishedCourse($id){
        $course = Course::find($id);
        $course->publication_status = 1;
        $course->save();
        return redirect('/Course-info/manage-course')->with('message', 'Course info published');
    }
    public function deleteCourse($id){
        $course = Course::find($id);
        $course->delete();
        return redirect('/Course-info/manage-course')->with('message', 'Course info deleted');
    }
    public function editCourse($id){
        $course = Course::find($id);
        $teachers = Teacher::where('publication_status', 1)->get();
        return view('admin.course.edit-course', [
            'course'=>$course,
            'teachers'=>$teachers
        ]);
    }
    public function updateCourse(Request $request){
        if($request->course_image){
            $course = Course::find($request->course_id);
            unlink($course->course_image);

            $courseImage = $request->file('course_image');
            $imageName = $courseImage->getClientOriginalName();
            $directory = 'course-images/';
            $imageURL = $directory.$imageName;
            Image::make($courseImage)->save($imageURL);

            $course->course_title = $request->course_title;
            $course->teacher_id = $request->teacher_id;
            $course->course_price = $request->course_price;
            $course->short_description = $request->short_description;
            $course->long_description = $request->long_description;
            $course->course_image = $imageURL;
            $course->publication_status = $request->publication_status;
            $course->save();
            return redirect('/Course-info/manage-course')->with('message', 'Course info updated');
        }else{
            $course = Course::find($request->course_id);
            $course->course_title = $request->course_title;
            $course->teacher_id = $request->teacher_id;
            $course->course_price = $request->course_price;
            $course->short_description = $request->short_description;
            $course->long_description = $request->long_description;
            $course->publication_status = $request->publication_status;
            $course->save();
            return redirect('/Course-info/manage-course')->with('message', 'Course info updated');
        }
    }
    public function viewCourseDetails($id){
        $course = Course::find($id);
        return view('admin.course.view-course', ['course'=>$course]);
    }

}

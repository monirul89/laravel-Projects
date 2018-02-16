<?php

namespace App\Http\Controllers;


use App\About;
use App\Blog;
use App\Contact;
use App\Course;
use App\Event;
use App\Gallery;
use App\Skill;
use App\Slider;
use App\Teacher;
use Illuminate\Support\Facades\DB;

class VarsityController
{
    public function index(){
        $sliders = Slider::where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->get();
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->get();
        $blogs = Blog::where('publication_status', 1)->orderBy('blog_published_date', 'DESC')->get();
        $courses = DB::table('courses')
            ->join('teachers', 'courses.teacher_id','=','teachers.id')
            ->select('courses.*','teachers.teacher_name','teachers.teacher_image')
            ->get();
        $teachers = Teacher::where('publication_status', 1)->get();
        $students = DB::table('students')
            ->join('departments', 'students.department_id','=','departments.id')
            ->join('student_statuses', 'students.student_status_id','=','student_statuses.id')
            ->select('students.*','departments.department_name','student_statuses.student_status')
            ->get();
        $about = About::where('publication_status', 1)->first();
        $skills = Skill::where('publication_status', 1)->take(4)->get();
        return view('front-end.home.home', [
            'sliders'=>$sliders,
            'events'=>$events,
            'blogs'=>$blogs,
            'courses'=>$courses,
            'teachers'=>$teachers,
            'students'=>$students,
            'about'=>$about,
            'skills'=>$skills
        ]);
    }
    public function course(){
        $courses = DB::table('courses')
            ->join('teachers', 'courses.teacher_id','=','teachers.id')
            ->select('courses.*','teachers.teacher_name','teachers.teacher_image')
            ->where('courses.publication_status', 1)
            ->paginate(4);
        $events = Event::where('publication_status', 1)->take(3)->orderBy('id', 'DESC')->get();
        return view('front-end.course.course', [
            'courses'=>$courses,
            'events'=>$events
        ]);
    }
    public function courseSingle($id){
        $course = DB::table('courses')
            ->join('teachers', 'courses.teacher_id','=','teachers.id')
            ->select('courses.*','teachers.teacher_name','teachers.teacher_image')
            ->where('courses.id', $id)
            ->first();
        $courses = DB::table('courses')
            ->join('teachers', 'courses.teacher_id','=','teachers.id')
            ->select('courses.*','teachers.teacher_name','teachers.teacher_image')
            ->take(2)
            ->inRandomOrder()
            ->where('courses.publication_status', 1)
            ->get();
        $events = Event::where('publication_status', 1)->take(3)->orderBy('id', 'DESC')->get();
        return view('front-end.course.single', [
            'course'=>$course,
            'courses'=>$courses,
            'events'=>$events
        ]);
    }
    public function events(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->paginate(3);
        $blogs = Blog::where('publication_status', 1)->take(3)->orderBy('id', 'DESC')->get();
        return view('front-end.event.event', [
            'events'=>$events,
            'blogs'=>$blogs
        ]);
    }
    public function eventSingle($id){
        $event = Event::find($id);
        $events = Event::where('publication_status', 1)->skip($id)->take(2)->orderBy('id', 'DESC')->get();
        $blogs = Blog::where('publication_status', 1)->take(3)->orderBy('id', 'DESC')->get();
        return view('front-end.event.single', [
            'event'=>$event,
            'events'=>$events,
            'blogs'=>$blogs
        ]);
    }
    public function gallery(){
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->paginate(12);
        return view('front-end.gallery.gallery', ['galleries'=>$galleries]);
    }
    public function blog(){
        $blogs = Blog::where('publication_status', 1)->orderBy('id', 'DESC')->paginate(3);
        $events = Event::where('publication_status', 1)->take(3)->orderBy('id', 'DESC')->get();
        return view('front-end.blog.blog', [
            'blogs'=>$blogs,
            'events'=>$events
            ]);
    }
    public function blogSingle($id){
        $blog = Blog::find($id);
        $blogs = Blog::where('publication_status', 1)->skip($id)->take(2)->get();
        $events = Event::where('publication_status', 1)->take(3)->orderBy('id', 'DESC')->get();
        return view('front-end.blog.single', [
            'blog'=>$blog,
            'blogs'=>$blogs,
            'events'=>$events
        ]);
    }
    public function error404(){
        return view('front-end.error.error');
    }
    public function contact(){
        $contact = Contact::where('publication_status', 1)->first();
        return view('front-end.contact.contact', ['contact'=>$contact]);
    }

}
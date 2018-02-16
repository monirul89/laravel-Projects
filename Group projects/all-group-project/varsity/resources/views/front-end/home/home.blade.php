@extends('front-end.master')


@section('title')
    Home
@endsection

@section('banner')
    <section id="slider">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="slider_area">
                    <!-- Start super slider -->
                    <div id="slides">
                        <ul class="slides-container">
                            @foreach($sliders as $slider)
                            <li>
                                <img src="{{ asset($slider->slider_image) }}" alt="img">
                                <div class="slider_caption">
                                    <h2>{{ $slider->slider_heading }}</h2>
                                    <p>{{ $slider->slider_description }}</p>
                                    <a class="slider_btn" href="{{ route('contact') }}">Know More</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <nav class="slides-navigation">
                            <a href="#" class="next"></a>
                            <a href="#" class="prev"></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('body')
    <section id="aboutUs">
        <div class="container">
            <div class="row">
                <!-- Start about us area -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="aboutus_area wow fadeInLeft">
                        <h2 class="titile">About Us</h2>
                        <p>{!! $about->about_us !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="newsfeed_area wow fadeInRight">
                        <ul class="nav nav-tabs feed_tabs" id="myTab2">
                            <li class="active"><a href="#events" data-toggle="tab">Events</a></li>
                            <li><a href="#notice" data-toggle="tab">Blogs</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start news tab content -->
                            <div class="tab-pane fade in active" id="events">
                                <ul class="news_tab">
                                    @foreach($events as $event)
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="{{ route('event-single', ['id'=>$event->id]) }}">
                                                    <img class="media-object" src="{{ asset($event->event_image) }}" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="{{ route('event-single', ['id'=>$event->id]) }}">{{ $event->event_name }}</a>
                                                <span class="feed_date">{{ $event->event_date }}</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <a class="see_all" href="{{ route('events') }}">See All</a>
                            </div>
                            <!-- Start notice tab content -->
                            <div class="tab-pane fade " id="notice">
                                <div class="single_notice_pane">
                                    <ul class="news_tab">
                                        @foreach($blogs as $blog)
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="{{ route('blog-single', ['id'=>$blog->id]) }}">
                                                        <img class="media-object" src="{{ asset($blog->blog_image) }}" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="{{ route('blog-single', ['id'=>$blog->id]) }}">{{ $blog->blog_title }}</a>
                                                    <span class="feed_date">{{ $blog->blog_published_date }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <a class="see_all" href="{{ route('blog') }}">See All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== END ABOUT US SECTION ================-->

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
        <!-- Start why us top -->
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="whyus_top">
                    <div class="container">
                        <!-- Why us top titile -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="title_area">
                                    <h2 class="title_two">Why Us</h2>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Why us top titile -->
                        <!-- Start Why us top content  -->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-desktop"></span>
                                    </div>
                                    <h3>Technology</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-users"></span>
                                    </div>
                                    <h3>Best Tutor</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-flask"></span>
                                    </div>
                                    <h3>Practical Training</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-support"></span>
                                    </div>
                                    <h3>Support</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Why us top content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End why us top -->

        <!-- Start why us bottom -->
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="whyus_bottom">
                    <div class="slider_overlay"></div>
                    <div class="container">
                        <div class="skills">
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStat" data-dimension="150" data-info="" data-width="10" data-fontsize="25" data-percent="70" data-fgcolor="#999" data-bgcolor="#fff"></div>
                                    <h4>Repeate Learners</h4>
                                </div>
                            </div>
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStathalf2" data-dimension="150" data-info="" data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999" data-bgcolor="#fff"></div>
                                    <h4>Success Rate</h4>
                                </div>
                            </div>
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStat2" data-dimension="150" data-info="" data-width="10" data-fontsize="25" data-percent="86" data-fgcolor="#999" data-bgcolor="#fff"></div>
                                    <h4>Student Engagement</h4>
                                </div>
                            </div>
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStat3" data-dimension="150" data-info="" data-width="10" data-fontsize="25" data-percent="95" data-fgcolor="#999" data-bgcolor="#fff"></div>
                                    <h4>Certified Courses</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End why us bottom -->
    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
        <div class="container">
            <!-- Our courses titile -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two">Our Courses</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- End Our courses titile -->
            <!-- Start Our courses content -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ourCourse_content">
                        <ul class="course_nav">
                            @foreach($courses as $course)
                            <li>
                                <div class="single_course">
                                    <div class="singCourse_imgarea">
                                        <img src="{{ asset($course->course_image) }}" height="230px;" />
                                        <div class="mask">
                                            <a href="{{ route('course-single', ['id'=>$course->id]) }}" class="course_more">View Course</a>
                                        </div>
                                    </div>
                                    <div class="singCourse_content">
                                        <h3 class="singCourse_title"><a href="{{ route('course-single', ['id'=>$course->id]) }}">{{ $course->course_title }}</a></h3>
                                        <p class="singCourse_price">TK. <span>{{ $course->course_price }}</span> Per Credit Hour</p>
                                        <p>{{ $course->short_description }}</p>
                                    </div>
                                    <div class="singCourse_author">
                                        <img src="{{ asset($course->teacher_image) }}" alt="img">
                                        <p>{{ $course->teacher_name }}, Teacher</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Our courses content -->
        </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <section id="ourTutors">
        <div class="container">
            <!-- Our courses titile -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two">Our Tutors</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- End Our courses titile -->

            <!-- Start Our courses content -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ourTutors_content">
                        <!-- Start Tutors nav -->
                        <ul class="tutors_nav">
                            @foreach($teachers as $teacher)
                            <li>
                                <div class="single_tutors">
                                    <div class="tutors_thumb">
                                        <img src="{{ asset($teacher->teacher_image) }}" alt="" />
                                    </div>
                                    <div class="singTutors_content">
                                        <h3 class="tutors_name">{{ $teacher->teacher_name }}</h3>
                                        <span>{{ $teacher->teacher_designation }}</span>
                                        <p>{{ $teacher->teacher_email }}</p>
                                    </div>
                                    <div class="singTutors_social">
                                        <ul class="tutors_socnav">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Our courses content -->
        </div>
    </section>
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
        <div class="container">
            <!-- Our courses titile -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two">What our Student says</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- End Our courses titile -->

            <!-- Start Our courses content -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="studentsTestimonial_content">
                        <div class="row">
                            <!-- start single student testimonial -->
                            @foreach($students as $student)
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single_stsTestimonial wow fadeInUp">
                                    <div class="stsTestimonial_msgbox">
                                        <p>{{ $student->students_comment }}</p>
                                    </div>
                                    <img class="stsTesti_img" src="{{ asset($student->student_image) }}" alt="img">
                                    <div class="stsTestimonial_content">
                                        <h3>{{ $student->student_name }}</h3>
                                        <span>{{ $student->student_status }}</span>
                                        <p>{{ $student->department_name }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End single student testimonial -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Our courses content -->
        </div>
    </section>
@endsection
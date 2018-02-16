@extends('front-end.master')

@section('title')
    Course Single
@endsection

@section('banner')
    <section id="imgBanner">
        <h2>Course Details</h2>
    </section>
@endsection

@section('body')
    <section id="courseArchive">
        <div class="container">
            <div class="row">
                <!-- start course content -->
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="courseArchive_content">
                        <div class="row">
                            <!-- start single blog -->
                            <div class="col-lg-12 col-12 col-sm-12">
                                <div class="single_blog">
                                    <div class="blogimg_container">
                                        <a href="#" class="blog_img">
                                            <img alt="img" src="{{ asset($course->course_image) }}">
                                        </a>
                                    </div>
                                    <h2 class="blog_title">{{ $course->course_title }}</h2>
                                    <div class="blog_commentbox">
                                        <span class="singlecourse_author">
                                            <img src="{{ asset($course->teacher_image) }}" alt="">
                                        </span>
                                        <p>{{ $course->teacher_name }}, Teacher</p>
                                        <p class="pull-right"><i class="fa fa-calendar"></i>TK. {{ $course->course_price }}</p>
                                    </div>
                                    <p>{!! $course->long_description !!} </p>

                                </div>
                                <!-- single blog nex & prev button -->
                                <div class="single_blog_prevnext">
                                    <a class="prev_post wow fadeInLeft" href="#"><i class="fa fa-angle-left"></i>Previous Post</a>
                                    <a class="next_post wow fadeInRight" href="#">Next Post<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                        <!-- start related course -->
                        <div class="related_course">
                            <h2>More Courses</h2>
                            <div class="row">
                                @foreach($courses as $course)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single_course wow fadeInUp" >
                                        <div class="singCourse_imgarea">
                                            <img src="{{ asset($course->course_image) }}" height="230px;">
                                            <div class="mask">
                                                <a class="course_more" href="{{ route('course-single', ['id'=>$course->id]) }}">View Course</a>
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
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End related course -->
                    </div>
                </div>
                <!-- End course content -->

                <!-- start course archive sidebar -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="courseArchive_sidebar">
                        <!-- start single sidebar -->
                        <div class="single_sidebar">
                            <h2>Events <span class="fa fa-angle-double-right"></span></h2>
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
                        </div>
                        <!-- End single sidebar -->

                        <!-- start single sidebar -->
                        <div class="single_sidebar">
                            <h2>Sponsor Add <span class="fa fa-angle-double-right"></span></h2>
                            <a class="side_add" href="#"><img src="{{ asset('/') }}front/img/side-add.jpg" alt="img"></a>
                        </div>
                        <!-- End single sidebar -->
                    </div>
                </div>
                <!-- start course archive sidebar -->
            </div>
        </div>
    </section>
@endsection
@extends('front-end.master')

@section('title')
    Course Archive
@endsection

@section('banner')
    <section id="imgBanner">
        <h2>Course Archive</h2>
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
                            <!-- start single course -->
                            @foreach($courses as $course)
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single_course wow fadeInUp">
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
                            </div>
                            @endforeach
                            <!-- End single course -->
                        </div>
                        {{ $courses->links() }}
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
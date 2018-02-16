@extends('front-end.master')

@section('title')
    Event Single
@endsection

@section('banner')
    <section id="imgBanner">
        <h2>Events Archive</h2>
    </section>
@endsection

@section('body')
    <section id="courseArchive">
        <div class="container">
            <div class="row">
                <!-- start course content -->
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="courseArchive_content">
                        <!-- start blog archive  -->
                        <div class="row">
                            <!-- start single blog -->
                            <div class="col-lg-12 col-12 col-sm-12">
                                <div class="single_blog">
                                    <!-- start events slider -->
                                    <div class="events_slider_area">
                                        <div class="events_slider">
                                            <div><img src="{{ asset($event->event_image) }}" alt="img"></div>
                                            <div><img src="{{ asset($event->event_image) }}" alt="img"></div>
                                            <div><img src="{{ asset($event->event_image) }}" alt="img"></div>
                                        </div>
                                    </div>
                                    <!-- End events slider -->
                                    <h2 class="blog_title">{{ $event->event_name }}</h2>
                                    <div class="blog_commentbox">
                                        <p><i class="fa fa-clock-o"></i>Time: {{ $event->event_time }},{{ $event->event_date }}</p>
                                        <p><i class="fa fa-map-marker"></i>Location: {{ $event->event_location }}</p>
                                    </div>
                                    <p>{!! $event->long_description !!}</p>

                                </div>
                                <!-- single blog nex & prev button -->
                                <div class="single_blog_prevnext">
                                    <a class="prev_post wow fadeInLeft" href="#"><i class="fa fa-angle-left"></i>Previous Event</a>
                                    <a class="next_post wow fadeInRight" href="#">Next Event<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                        <!-- end blog archive  -->
                        <!-- start related post -->
                        <div class="related_post">
                            <h2>More Events</h2>
                            <div class="row">
                                @foreach($events as $event)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single_blog_archive wow fadeInUp">
                                        <div class="blogimg_container">
                                            <a class="blog_img" href="{{ route('event-single', ['id'=>$event->id]) }}">
                                                <img src="{{ asset($event->event_image) }}" alt="img" height="230px;">
                                            </a>
                                        </div>
                                        <h2 class="blog_title"><a href="{{ route('event-single', ['id'=>$event->id]) }}"> {{ $event->event_name }}</a></h2>
                                        <div class="blog_commentbox">
                                            <p><i class="fa fa-clock-o"></i>Time: {{ $event->event_time }},{{ $event->event_date }}</p>
                                            <p><i class="fa fa-map-marker"></i>Location: {{ $event->event_location }}</p>
                                        </div>
                                        <p class="blog_summary">{{ $event->short_description }}</p>
                                        <a href="{{ route('event-single', ['id'=>$event->id]) }}" class="blog_readmore">Read More</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- start related post -->
                    </div>
                </div>
                <!-- End course content -->

                <!-- start course archive sidebar -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="courseArchive_sidebar">
                        <!-- start single sidebar -->
                        <div class="single_sidebar">
                            <h2>Popular Blogs <span class="fa fa-angle-double-right"></span></h2>
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
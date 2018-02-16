@extends('front-end.master')

@section('title')
    Blog Archived
@endsection

@section('banner')
    <section id="imgBanner">
        <h2>Blog Archive</h2>
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
                            <!-- start single blog archive -->
                            @foreach($blogs as $blog)
                            <div class="col-lg-12 col-12 col-sm-12">
                                <div class="single_blog_archive wow fadeInUp">
                                    <div class="blogimg_container">
                                        <a href="{{ route('blog-single', ['id'=>$blog->id]) }}" class="blog_img">
                                            <img alt="img" src="{{ asset($blog->blog_image) }}">
                                        </a>
                                    </div>
                                    <h2 class="blog_title"><a href="{{ route('blog-single', ['id'=>$blog->id]) }}"> {{ $blog->blog_title }}</a></h2>
                                    <div class="blog_commentbox">
                                        <p><i class="fa fa-user"></i>{{ $blog->blog_writer }}</p>
                                        <p><i class="fa fa-calendar"></i>{{ $blog->blog_published_date }}</p>
                                    </div>
                                    <p class="blog_summary">{{ $blog->short_description }}</p>
                                    <a class="blog_readmore" href="{{ route('blog-single', ['id'=>$blog->id]) }}">Read More</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- end blog archive  -->
                        {{ $blogs->links() }}
                    </div>
                </div>
                <!-- End course content -->

                <!-- start course archive sidebar -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="courseArchive_sidebar">
                        <!-- start single sidebar -->
                        <div class="single_sidebar">
                            <h2>Upcoming Event <span class="fa fa-angle-double-right"></span></h2>
                            <ul class="news_tab">
                                @foreach($events as $event)
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="{{ route('event-single', ['id'=>$blog->id]) }}">
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
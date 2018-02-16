@extends('front-end.master');

@section('title')
    gallery
@endsection
@section('body')

    <header id="intro-carousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item html5-video-container active">
                <!-- HTML5 Video -->
                <video muted autoplay loop poster="{{asset('/')}}front/images/typing-on-mac.jpg" id="html5-video"
                       class="fill">
                    <source src="{{asset('/')}}front/videos/typing-on-mac.webm" type="video/webm">
                    <source src="{{asset('/')}}front/videos/typing-on-mac.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <h1 class="animated slideInDown">I am MD. MONIRUL ISLAM</h1>
                    <h4 class="animated slideInDown" style="color: #FFFFFF">90/B(4th floor), Malibagh Chowdhury Para,
                        D.I.T-Road.Dhaka-1219</h4>
                    <h4 class="animated slideInDown" style="color: #FFFFFF">Mobile No 1: 01915047779</br>
                        E-mail : monirul89@gmail.com</h4>
                    <a href="http://bit.ly/hh5_template" class="btn btn-default btn-lg">MY RESUME</a>
                </div>
                <div class="html5-video-controls">
                    <a id="html5-video-volume" class="fa fa-volume-up fa-lg" href="#"></a>
                    <a id="html5-video-play" class="fa fa-pause fa-lg" href="#"></a>
                </div>
                <div class="overlay-detail"></div>
            </div><!-- /.item -->

        </div><!-- /.carousel-inner -->
        <div class="mouse"></div>
    </header>

    <section id="work" class="main style3 primary">
        <div class="content">
            <div class="">
                <h2  class="animated slideInDown"><img class="example-image" src="{{asset('/')}}front/images/img/galleryIcon2.png" alt=""/></h2>
            </div>

            {{--<!-- Gallery  -->--}}
            {{--<div class="gallery">--}}
            {{--<article class="from-left">--}}
            {{--<a href="{{asset('/')}}front/images/fulls/01.jpg" class="image fit"><img src="{{asset('/')}}front/images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a>--}}
            {{--</article>--}}
            {{--<article class="from-right">--}}
            {{--<a href="{{asset('/')}}front/images/fulls/02.jpg" class="image fit"><img src="{{asset('/')}}front/images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a>--}}
            {{--</article>--}}
            {{--<article class="from-left">--}}
            {{--<a href="{{asset('/')}}front/images/fulls/03.jpg" class="image fit"><img src="{{asset('/')}}front/images/thumbs/03.jpg" title="Air Lounge" alt="" /></a>--}}
            {{--</article>--}}
            {{--<article class="from-right">--}}
            {{--<a href="{{asset('/')}}front/images/fulls/04.jpg" class="image fit"><img src="{{asset('/')}}front/images/thumbs/04.jpg" title="Carry on" alt="" /></a>--}}
            {{--</article>--}}
            {{--<article class="from-left">--}}
            {{--<a href="{{asset('/')}}front/images/fulls/05.jpg" class="image fit"><img src="{{asset('/')}}front/images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a>--}}
            {{--</article>--}}
            {{--<article class="from-right">--}}
            {{--<a href="{{asset('/')}}front/images/fulls/06.jpg" class="image fit"><img src="{{asset('/')}}front/images/thumbs/06.jpg" title="Bent IX" alt="" /></a>--}}
            {{--</article>--}}
            {{--</div>--}}
            <div class="row">
                <div class="lightbox-img col-md-10 col-md-offset-1">
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/DSC01403.JPG"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/DSC01403.JPG"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/1.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/1.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/2.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/2.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/3.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/3.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/4.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/small-4.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/Image(539).jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/Image(539).jpg"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/Image(564).jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/Image(564).jpg"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/Photo-0013.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/Photo-0013.jpg"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/MG0550A (5).jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/MG0550A (5).jpg"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/83.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/83.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/5.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/small-5.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/80.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/80.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/32.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/32.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/27.PSD (33) copy.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/27.PSD (33) copy.jpg"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/05032009463.jpg"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/05032009463.jpg"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/SAM_8180.JPG"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/SAM_8180.JPG"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                                 data-wow-delay="0.5s" data-wow-offset="50"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/SAM_8178.JPG"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/SAM_8178.JPG"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                <a class="example-image-link" href="{{asset('/')}}front/images/img/DSC01424.JPG"
                                   data-lightbox="example-set" data-title="">
                                    <img class="example-image" src="{{asset('/')}}front/images/img/DSC01424.JPG"
                                         alt=""/></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
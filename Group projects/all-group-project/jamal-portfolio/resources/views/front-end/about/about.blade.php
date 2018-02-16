@extends('front-end.master')

@section('title')
    About || Jamal's Portfolio
@endsection

@section('body')
    <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>About Myself</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('/')}}">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
    ==================================================
        Company Description Section Start
    ================================================== -->
    <section class="company-description">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('/')}}front/images/about/masters.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('/')}}front/images/about/diploma.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>


    <!--
    ==================================================
        Company Feature Section Start
    ================================================== -->
    <section class="about-feature clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="block about-feature-1 bg-change wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                    <h2>
                        Why Choose Me
                    </h2>
                    <p>
                        {!! $about->choose_me !!}
                    </p>
                </div>
                <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    <h2 class="item_title">
                        What You Get
                    </h2>
                    <p>
                        {!! $about->what_get !!}
                    </p>
                </div>
                <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                    <h2 class="item_title">
                        My skills
                    </h2>
                    <p>
                        {!! $about->my_skill !!}
                    </p>
                </div>
            </div>
        </div>
    </section>


@endsection
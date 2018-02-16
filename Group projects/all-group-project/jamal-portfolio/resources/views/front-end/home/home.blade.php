@extends('front-end.master')

@section('title')
    Home || Jamal's Portfolio
@endsection

@section('body')
    <!--
==================================================
Slider Section Start
================================================== -->
    <section id="hero-area" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">
                        <!-- Slider -->
                        <section class="cd-intro">
                            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>HI, MY NAME IS JAMAL UDDIN & I AM A</span><br>
                                <span class="cd-words-wrapper">
                        <b class="is-visible">DESIGNER</b>
                        <b>DEVELOPER</b>
                        <b>ENGINEER</b>
                    </span>
                            </h1>
                        </section> <!-- cd-intro -->
                        <!-- /.slider -->
                        <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                            With 2 years experience, I've occupied many roles including WordPress Developer,<br> web designer and developer. This site showcases some of my work.
                        </h2>
                        <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works">View Works</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#main-slider-->

    <!--
    ==================================================
    About Section Start
    ================================================== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                        <h2>
                            ABOUT ME
                        </h2>
                        <p>
                            {!! $about->main_description !!}
                        </p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                        <img src="{{asset($about->about_image)}}" alt="jamal">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#about -->


    <!--
    ==================================================
    Portfolio Section Start
    ================================================== -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-heading">
                <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Projects</h1>
                <p class="wow fadeInDown" data-wow-delay=".5s">
                    I completed many Design and Development project for my local and international client. <br> Some examples of my recent work are given below.
                </p>
            </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <img src="{{asset($project->project_image)}}" class="img-responsive" alt="item-1" >
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="{{asset($project->project_image)}}">Demo</a>
                                    <a target="_blank" href="{{route('single',['id'=>$project->id])}}">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    {{$project->service_name}}
                                </a>
                            </h4>
                            <p>
                                {{$project->project_name}}
                            </p>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section> <!-- #works -->


@endsection
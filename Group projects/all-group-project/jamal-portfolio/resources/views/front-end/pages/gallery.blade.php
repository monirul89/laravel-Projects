@extends('front-end.master')

@section('title')
    Gallery || Jamal's Portfolio
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
                        <h2>Gallery</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('/')}}">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Gallery</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=============================
    =            Gallery            =
    ==============================-->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                        <div class="img-wrapper">
                            <img src="{{asset($project->project_image)}}" class="img-responsive" alt="this is a title">
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="{{asset($project->project_image)}}">Demo</a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

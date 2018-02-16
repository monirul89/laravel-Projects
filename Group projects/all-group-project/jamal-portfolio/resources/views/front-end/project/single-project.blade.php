@extends('front-end.master')

@section('title')
    Single Project || Jamal's Portfolio
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
                        <h2>{{$project->project_name}}</h2>
                        {{--<div class="portfolio-meta">--}}
                            {{--<span>Dec 11, 2020</span>|--}}
                            {{--<span> Category: typography</span>|--}}
                            {{--<span> website: <a href="http://www.themefisher.com">Themefisher</a></span>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#Page header-->

    <section class="portfolio-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-single-img">
                        <img class="img-responsive" alt="" src="{{asset($project->project_image)}}">
                    </div>
                    <div class="portfolio-content">
                        <p>
                            {!! $project->project_description !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
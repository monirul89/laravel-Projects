@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')

    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                @foreach($sliders as $slider)
                <li>
                    <div class="w3layouts-banner-top">

                        <div class="container">
                            <div class="agileits-banner-info">
                                <img src="{{ asset($slider->slider_image) }}"/>
                                <span>{{$slider->slider_sort_title}}</span>
                                <h3>{{$slider->slider_title}} </h3>
                                <p>{!! $slider->slider_description !!}</p>

                            </div>
                        </div>
                    </div>
                </li>
                @endforeach


            </ul>
        </div>
    </div>

    <!-- //banner -->

    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="w3_heade_tittle_agile">{{$welcome->welcome_title}}</h2>

            <p class="ab">{!! $welcome->welcome_description !!}</p>
        </div>
    </div>
    <!-- /about-bottom -->
    <!-- /girds_agileits -->
    <div class="Department_girds_agileits">
        <div class="agile_team_grid">
            @foreach($departments as $department)

            <div class="col-md-3 w3ls_banner_bottom_grid">
                <img src="{{asset($department->department_image)}}" alt=" " class="img-responsive" />
                <div class="overlay">
                    <h4>{{$department->department_name}}</h4>

                </div>
            </div>

            @endforeach
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //girds_agileits -->



    <!-- stats -->
    <div class="stats" id="stats">
        <div class="container">
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    <p class="counter">120</p>
                    <h3>Hospital Rooms</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
                    <i class="fa fa-wheelchair" aria-hidden="true"></i>
                    <p class="counter">165</p>
                    <h3>Wheelchair</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                    <p class="counter">563</p>
                    <h3>Ambulance Car</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <p class="counter">245</p>
                    <h3>Saved Hearts</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //stats -->

    <!-- services-bottom -->
    <div class="services-bottom">
        <div class="col-md-6 wthree_services_bottom_right">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($departments as $department)
                        <li>
                            <div class="w3_agile_services_bottom_right_grid">
                                <p class="w3layouts_head_slide">{{$department->department_name}}</p>

                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>

        <div class="col-md-6 wthree_services_bottom_left">
            <div class="wthree_services_bottom_left_grid">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($departments as $department)
                                <li>
                                    <div class="col-md-12 w3_agileits_services_bottom_r_grid">
                                        <h4>{{$department->department_title}}</h4>
                                        <p>{!! $department->department_description !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>


                <div class="clearfix"> </div>
            </div>

        </div>


        <div class="clearfix"> </div>
    </div>

@endsection
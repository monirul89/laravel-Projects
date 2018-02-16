@extends('front-end.master')

@section('title')
    About
@endsection

@section('body')


    <div class="banner1 jarallax">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->


    <!-- //banner -->

    <!-- about -->
    <div class="about" id="about">
        <div class="about-w3lsrow">


            <div class="col-md-6 w3about-img">
                <img src="{{asset($abouts->about_image)}}" alt=" " class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-7 w3about-img">
                <div class="w3about-text">
                    <h5 class="w3l-subtitle">{{$abouts->about_name}}</h5>
                    <p>{!! $abouts->about_description !!}</p>


                </div>
            </div>
            <div class="clearfix"> </div>

        </div>
    </div>
    <!-- /about-bottom -->
    <!-- /girds_agileits -->

    <!-- //girds_agileits -->


    <!-- services section -->
    <div class="service-w3l jarallax" id="service">
        <div class="container">
            <h3 class="w3_heade_tittle_agile two">What We Do Best</h3>
            @foreach($services as $service)
            <div class="col-lg-4 col-md-4 col-sm-12 serv-agileinfo1">
                <div class="col-lg-12 col-md-12 col-sm-6 serv-wthree1" data-aos="zoom-in">
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                    <div class="ch-info-back">
                                        <h5>{{$service->service_title}}</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h4 class="text-center">{{$service->service_name}}</h4>
                    <p class="text-muted">{!! $service->service_description !!}</p>
                </div>

                <div class="clearfix"></div>
            </div>

            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /services section -->
    <!-- team -->

    <!-- //team -->
    <!-- stats -->
    <div class="stats_inner jarallax" id="stats">
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
                    <h3>Saved hearts</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


@endsection
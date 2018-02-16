@extends('front-end.master')
@section('title')
    Services | Food Recipe
@endsection
@section('content')
    <!-- Services -->
    <div class="services agileits w3layouts" id="services">
        <div class="container">
            <h2 class="heading">Our <span>Services</span></h2>
            <p class="heading">what we do</p>
            <div class="col-md-8 col-sm-6 agileits w3layouts services-grid services-grid-1">
                @foreach($services as $service)
                <div class="col-md-4 col-sm-4 agileits w3layouts services-info services-info-1">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <h4 class="agileits w3layouts">{{$service->service_name}}</h4>
                    <p>{!! $service->service_description !!}</p>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 agileits w3layouts col-sm-6 services-grid services-grid-2">
                <img src="{{asset('/')}}front/images/bottom.jpg" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //Services -->

    <!-- background -->
    <div class="background">
        <div class="container">
            <h3>order online</h3>
            <h5><span class="fa fa-phone" aria-hidden="true"></span> +12 877 345 9667</h5>
            <p>We are committed to your satisfaction with every order.Get start today</p>
        </div>
    </div>
    <!-- //background -->

    <!-- blog -->
    <div class="blog">
        <div class="container">
            <h3 class="heading">Our <span>Food</span> Blog</h3>
            <p class="heading">Our latest news</p>
            <div class="agileits_banner_bottom_grid_three">
                @foreach($foods as $food)
                <div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
                    <div class="wthree_banner_bottom_grid_three_left1 grid">
                        <figure class="effect-roxy">
                            <img src="{{asset($food->food_image)}}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3>{{$food->food_name}}</h3>
                                <p>TK. {{$food->food_price}}</p>
                            </figcaption>
                        </figure>
                    </div>
                    <p class="w3_agileits_para">{!! $food->food_description !!}</p>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
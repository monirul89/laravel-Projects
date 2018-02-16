@extends('front-end.master')
@section('title')
    ABOUT | Food Recipe
@endsection
@section('content')
    <!-- about section -->
    <div class="about">
        <div class="container">
            <h2 class="heading">{{$about->heading}}</h2>
            <p class="heading">{{$about->title}}</p>
            <div class="about-content">
                <div class="col-md-6 bottom-left">
                    <h3>{!! $about->short_description !!}</h3>
                    <p>{!! $about->long_description !!}</p>
                </div>
                <div class="col-md-6 bottom-right">
                    <img src="{{asset($about->about_image)}}" alt="" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //about section -->
    <!-- choose-us -->
    <div class="why-choose-agile">
        <div class="container">
            <div class="w3-heading-grid">
                <h3 class="heading">Why <span>Choose</span> Us</h3>
                <p class="heading">What We Do</p>
                <div class="agileits-border"> </div>
            </div>
            <div class="why-choose-agile-grids-top">
                <div class="col-md-4 agileits-w3layouts-grid">
                    @foreach($categories1 as $category1)
                    <div class="wthree_agile_us">
                        <div class="col-xs-9 agile-why-text">
                            <h4>{{$category1->category_name}}</h4>
                            <p>{{$category1->category_description}}</p>
                        </div>
                        <div class="col-xs-3 agile-why-text">

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4 agileits-w3layouts-grid img">
                    <img src="{{asset('/')}}front/images/bottom.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-4 agileits-w3layouts-grid">
                    @foreach($categories2 as $category2)
                    <div class="wthree_agile_us">
                        <div class="col-xs-3 agile-why-text agile-icon-left">

                        </div>
                        <div class="col-xs-9 agile-why-text two">
                            <h4>{{$category2->category_name}}</h4>
                            <p>{{$category2->category_description}}</p>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //choose-us -->

    <!-- menu section -->
    <div class="menu">
        <div class="container">
            <h3 class="heading">Our <span>Menu</span> List</h3>
            <p class="heading">Our Food Items List</p>
            <div class="menu-grids">
                <div class="col-md-4">
                    {{--<img src="{{asset('/')}}front/images/breakfast.jpg" alt="" />--}}
                    @foreach($foods1 as $food1)
                    <div class="menu-items">
                        <h4>{{$food1->food_name}} <span>Tk. {{$food1->food_price}}</span></h4>
                        <p> {!! $food1->food_description !!}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    {{--<img src="{{asset('/')}}front/images/lunch.jpg" alt="" />--}}
                    @foreach($foods2 as $food2)
                    <div class="menu-items">
                        <h4>{{$food2->food_name}} <span>Tk. {{$food2->food_price}}</span></h4>
                        <p> {!! $food2->food_description !!}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    {{--<img src="{{asset('/')}}front/images/dinner.jpg" alt="" />--}}
                    @foreach($foods3 as $food3)
                    <div class="menu-items">
                        <h4>{{$food3->food_name}} <span>Tk. {{$food3->food_price}}</span></h4>
                        <p> {!! $food3->food_description !!}</p>
                    </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@extends('front-end.master')
@section('title')
   HOME | Food Recipe
@endsection
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>There's no sincerer love than</h3>
                            <h4>The Love of food</h4>
                            <div class="contrast">
                                <p>Come first, Order us and take delicious food.</p>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#today" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item1">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Food is not rational</h3>
                            <h4>Food is a habit</h4>
                            <div class="contrast">
                                <p> Come first, Order us and take delicious food.</p>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#today" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>We saw on every street corner </h3>
                            <h4>and they're donuts</h4>
                            <div class="contrast">
                                <p> Come first, Order us and take delicious food.</p>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#today" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Food is our common ground </h3>
                            <h4>A universal experience </h4>
                            <div class="contrast">
                                <p> Come first, Order us and take delicious food.</p>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#today" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item4">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Food is our common ground </h3>
                            <h4>A universal experience </h4>
                            <div class="contrast">
                                <p> Come first, Order us and take delicious food.</p>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#today" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //slider -->
    <!-- // banner -->

    <!-- banner bottom section -->
    <div class="bannerbottom">
        <div class="container">
            <div class="bannerbottomgrids">
                <div class="col-md-6 bottomleft">
                    <h5>we are special in</h5>
                    <h3>making delicious dishes</h3>
                    <p>We pride ourselves on offering fresh and quality food inspired by cuisines from all around the world.</p>
                    <div class="agile-services-left-grid">
                        @foreach($categories as $category)
                        <div class="services-icon">
                            <div class="col-md-2">
                                <div class="services-icon-info">
                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-10 services-icon-text">
                                <h3>{{$category->category_name}}</h3>
                                <p> {{$category->category_description}}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5 bottomright">
                    <img src="{{asset('/')}}front/images/bottom.jpg" alt="" />
                    <div class="positiongrid1">
                        <h4>Cooking is one of the great gifts you can give to your love</h4>
                    </div>
                    <div class="positiongrid2">
                        <h4>Food is essential to life therefore make it good and eat it</h4>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //banner bottom section -->
    <!-- special -->
    <div id="today" class="special">
        <div class="container">
            <h2 class="heading">Special <span>Offers</span></h2>
            <p class="heading">our special offers</p>
            <div class="special-grids">
                <div class="col-md-6 w3l-special-grid">
                    <div class="col-md-6 w3ls-special-img">
                        <div class="w3ls-special-text effect-1">
                            <h4>TK. 200</h4>
                        </div>
                    </div>
                    <div class="col-md-6 agileits-special-info">
                        <h4>Bread Egg</h4>
                        <p>10% discount.Take special offer. Save your money.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3l-special-grid">
                    <div class="col-md-6 w3ls-special-img wthree-img1">
                        <div class="w3ls-special-text effect-1">
                            <h4>TK. 100</h4>
                        </div>
                    </div>
                    <div class="col-md-6 agileits-special-info">
                        <h4>Veg Soup</h4>
                        <p>15% discount.Take special offer. Save your money.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3l-special-grid">
                    <div class="col-md-6 agileits-special-info">
                        <h4>Burger</h4>
                        <p>12% discount.Take special offer. Save your money.</p>
                    </div>
                    <div class="col-md-6 w3ls-special-img wthree-img2">
                        <div class="w3ls-special-text effect-1">
                            <h4>TK. 150</h4>
                        </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3l-special-grid">
                    <div class="col-md-6 agileits-special-info">
                        <h4>Pasta</h4>
                        <p>15% discount.Take special offer. Save your money.</p>
                    </div>
                    <div class="col-md-6 w3ls-special-img wthree-img3">
                        <div class="w3ls-special-text effect-1">
                            <h4>TK. 100</h4>
                        </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>



                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //special -->

@endsection
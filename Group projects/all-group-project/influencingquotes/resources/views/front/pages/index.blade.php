@extends('front.master')

@section('title')
    Home | Influencing Quotes
@endsection

@section('body')
<!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="banner-bottom-grids">
                @foreach($rowone as $blog)
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#">{{ $blog->category_id }}</a></li>
                                    <li>{{ $blog->created_at }}</li>
                                </ul>
                            </div>
                            <h3>{{ $blog->quote_title  }}</h3>
                            <div class="dummy">
                                <p>{{ $blog->quote_description  }}</p>
                            </div>
                            {{--<div class="com-heart">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>120 Comments</a></li>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>12,536 Likes</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="clearfix"> </div>
            </div>
            {{--Extra Row Insert Start--}}
            <div class="banner-bottom-grids">
                @foreach($rowtwo as $blog)
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt4">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="pol">{{ $blog->category_id }}</a></li>
                                    <li>{{ $blog->created_at }}</li>
                                </ul>
                            </div>
                            <h3>{{ $blog->quote_title  }}</h3>
                            <div class="dummy">
                                <p>{{ $blog->quote_description  }}</p>
                            </div>
                            {{--<div class="com-heart">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>450 Comments</a></li>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>12,965 Likes</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            {{--Extra Row Insert  End--}}
            {{--Extra Row Insert Start--}}
            <div class="banner-bottom-grids">
                @foreach($rowthree as $blog)
                    <div class="col-md-3 banner-bottom-grid-left">
                        <div class="br-bm-gd-lt br-bm-gd-lt4">
                            <div class="overlay">
                                <div class="arrow-left"></div>
                                <div class="rectangle"></div>
                            </div>
                            <div class="health-pos">
                                <div class="health">
                                    <ul>
                                        <li><a href="#" class="pol">{{ $blog->category_id }}</a></li>
                                        <li>{{ $blog->created_at }}</li>
                                    </ul>
                                </div>
                                <h3>{{ $blog->quote_title  }}</h3>
                                <div class="dummy">
                                    <p>{{ $blog->quote_description  }}</p>
                                </div>
                                {{--<div class="com-heart">--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>450 Comments</a></li>--}}
                                        {{--<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>12,965 Likes</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            {{--Extra Row Insert  End--}}
            <div class="banner-bottom-grids">
                @foreach($rowfour as $blog)
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt4">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="pol">{{ $blog->category_id }}</a></li>
                                    <li>{{ $blog->created_at }}</li>
                                </ul>
                            </div>
                            <h3>{{ $blog->quote_title  }}</h3>
                            <div class="dummy">
                                <p>{{ $blog->quote_description  }}</p>
                            </div>
                            {{--<div class="com-heart">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>450 Comments</a></li>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>12,965 Likes</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>

            {{--First 3 Row End--}}

            <div class="move-text" style="margin-top: 50px;">
                <div class="breaking_news">
                    <h2>Announcement</h2>
                </div>
                <div class="marquee">
                    <div class="marquee1"><a class="breaking" href="#">Very soon will will add more features in our website.</a></div>
                    <div class="marquee2"><a class="breaking" href="#">Keep watching Influencing Quotes! Thank You</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <script type="text/javascript" src="{{asset('/')}}front-end/js/jquery.marquee.js"></script>
                <script>
                    $('.marquee').marquee({ pauseOnHover: true });
                    //@ sourceURL=pen.js
                </script>
            </div>
            {{--Breaking News End--}}

            <!-- news-and-events -->
            <div class="news">
                <div class="news-grids">
                    <div class="col-md-8 news-grid-left">
                        <h3>Popular Quotes</h3>
                        <ul>
                            @foreach($popularquotes as $popular)
                            <li>
                                <div class="news-grid-left1">
                                    <img src="{{asset($popular->quote_image)}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="news-grid-right1">
                                    <h4><a href="#">{{$popular->quote_title}}</a></h4>
                                    <h5>By <a href="#">Elizibeth Malkin</a> <label>|</label> <i>{{$popular->created_at }}</i></h5>
                                    <p>{{$popular->quote_description}}</p>
                                </div>
                                <div class="clearfix"> </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 news-grid-right">
                        <div class="news-grid-rght1">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">weather in Canada</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">edit location</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active london" id="home">
                                    <ul>
                                        <li>
                                            <h4>Wednesday</h4>
                                            <span></span>
                                            <p>21<sup>°</sup></p>
                                        </li>
                                        <li>
                                            <h4>Thursday</h4>
                                            <span class="moon"></span>
                                            <p>25<sup>°</sup></p>
                                        </li>
                                        <li>
                                            <h4>Friday</h4>
                                            <span class="sun"></span>
                                            <p>31<sup>°</sup></p>
                                        </li>
                                        <div class="clearfix"> </div>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359652.109742895!2d-113.72446020222534!3d36.24602872499641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1450786850582" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="news-grid-rght2">
                            <h3>subscribe to our newsletter</h3>
                            <p>Get the latest news and updates by signing up to our daily newsletter.We won't sell your email or spam you !</p>
                            <form>
                                <input type="text" value="enter your Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your Email address';}">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                        <div class="news-grid-rght3">
                            <img src="{{asset('/')}}front-end/images/18.jpg" alt=" " class="img-responsive" />
                            <div class="story">
                                <p>Advertisement Area</p>
                                <h3><a href="#">Short Description of your Ads</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //news-and-events -->
        </div>
    </div>
    <!-- //banner-bottom -->
@endsection
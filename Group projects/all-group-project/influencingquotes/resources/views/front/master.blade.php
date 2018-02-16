<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{asset('/')}}front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/')}}front-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="{{asset('/')}}front-end/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
<div class="banner1">
    <div class="banner-info1">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="{{route('/')}}"><span>IQ</span> INFLUENCING QUOTES</a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
                        <li><a href="{{route('/')}}" class="effect1">Home</a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Categories <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                    <li style="width: 170px; border-radius: 4px;"><a href="#">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Authors <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($authors as $author)
                                    <li style="width: 170px; border-radius: 4px;"><a href="#">{{ $author->author_name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#" class="effect1">Entertainment</a></li>
                        <li><a href="#" class="effect1">Culture</a></li>
                        <li><a href="#" class="effect1">About Us</a></li>
                        <li><a href="{{route('contact-us')}}" class="effect1">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
        </div>
    </div>
</div>
<!-- //banner -->
    @yield('body')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids wthree-agile">
            <div class="col-md-4 footer-grid-left">
                <h3>More Useful Links</h3>
                <ul>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Authors</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    <li><a href="{{route('login')}}">Administrator</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-grid-left">
                <h3>contact form</h3>
                <form>
                    <input type="text" value="enter your full name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your full name';}" required="">
                    <input type="email" value="enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your email address';}" required="">
                    <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                    <input type="submit" value="Submit" >
                </form>
            </div>
            <div class="col-md-4 footer-grid-left">
                <h3>about us</h3>
                <p>Meaningful quotes really can influence yourself to move on. By reading Influencing Quotes regularly you will get inspirational, wisdom, love, day, special day, valentine's day, positive, motivational, leadership and many more quotes which will push yourself to do better!
                    <i>- <a href="{{route('/')}}">Influencing Quotes Team</a></i></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-left-whtree-agileinfo">
                <p>&copy 2018 <a href="#">Influencing Quotes</a>. All rights reserved | Developed by <a href="http://marufrion.com">Maruf Abdullah</a></p>
            </div>
            <div class="footer-bottom-right-whtree-agileinfo">
                <ul>
                    <li><a href="https://twitter.com/LifeInfluencing" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
                    <li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
                    <li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="{{asset('/')}}front-end/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
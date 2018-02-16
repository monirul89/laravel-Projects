<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a href="{{route('/')}}" >
                    <img src="{{asset('/')}}front/images/logo.jpg" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('/')}}" >Home</a>
                    </li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>--}}
                        {{--<div class="dropdown-menu">--}}
                            {{--<ul>--}}
                                {{--<li><a href="{{route('blog-full')}}">Blog Full</a></li>--}}
                                {{--<li><a href="{{route('blog-left')}}">Blog Left sidebar</a></li>--}}
                                {{--<li><a href="{{route('blog-right')}}">Blog Right sidebar</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
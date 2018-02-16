<div class="header">
    <div class="header-top">
        <div class="wrap">
            <div class="top-menu">
                <ul>
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="num">
                <p> Call us : 032 2352 782</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="logo text-center">
            <a href="{{ route('/') }}"><img src="{{ asset('/') }}front/images/logo.jpg" alt="" /></a>
        </div>
        <div class="navigation">
            <nav class="navbar navbar-default" role="navigation">
                <div class="wrap">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('/') }}">Home</a></li>
                            @foreach($categories as $category)
                            <li><a href="{{ route('category-news', ['id'=>$category->id]) }}">{{ $category->category_name }}</a></li>
                            @endforeach
                            <div class="clearfix"></div>
                        </ul>
                        <div class="search">
                            <!-- start search-->
                            <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"> </span>
                                    </form>
                                </div>
                            </div>
                            <!-- search-scripts -->
                            <script src="{{ asset('/') }}front/js/classie.js"></script>
                            <script src="{{ asset('/') }}front/js/uisearch.js"></script>
                            <script>
                                new UISearch( document.getElementById( 'sb-search' ) );
                            </script>
                            <!-- //search-scripts -->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </nav>
        </div>
    </div>
</div>
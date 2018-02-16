<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from www.vasterad.com/themes/workscout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2018 15:07:04 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/colors/green.css" id="colors">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">


    <!-- ======================Header============================ -->
    <header class="transparent sticky-header">
        <div class="container">
            <div class="sixteen columns">

                <!-- Logo -->
                <div id="logo">
                    <h1><a href="{{route('/')}}"><img src="{{asset('/')}}front/images/logo2.png" alt="Work Scout" /></a></h1>
                </div>

                <!-- Menu -->
                <nav id="navigation" class="menu">
                    <ul id="responsive">

                        <li><a href="{{route('/')}}" id="current">Home</a>
                            <ul>
                                <li><a href="{{route('/')}}">Home #1</a></li>
                                <li><a href="#">Home #2</a></li>
                                <li><a href="#">Home #3</a></li>
                                <li><a href="#">Home #4</a></li>
                                <li><a href="#">Home #5</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="{{route('job-page')}}">Job Page</a></li>
                                <li><a href="{{route('job-page-alt')}}">Job Page Alternative</a></li>
                                <li><a href="{{route('resume-page')}}">Resume Page</a></li>
                                <li><a href="{{route('shortcodes')}}">Shortcodes</a></li>
                                <li><a href="{{route('icons')}}">Icons</a></li>
                                <li><a href="{{route('pricing-tables')}}">Pricing Tables</a></li>
                                <li><a href="{{route('contact-page')}}">Contact</a></li>
                            </ul>
                        </li>

                        <li><a href="#">For Candidates</a>
                            <ul>
                                <li><a href="{{route('browse-jobs')}}">Browse Jobs</a></li>
                                <li><a href="{{route('browse-categories')}}">Browse Categories</a></li>
                                <li><a href="{{route('add-resume')}}">Add Resume</a></li>
                                <li><a href="{{route('manage-resumes')}}">Manage Resumes</a></li>
                                <li><a href="{{route('job-alerts')}}">Job Alerts</a></li>
                            </ul>
                        </li>

                        <li><a href="#">For Employers</a>
                            <ul>
                                <li><a href="{{route('add-job')}}">Add Job</a></li>
                                <li><a href="{{route('manage-jobs')}}">Manage Jobs</a></li>
                                <li><a href="{{route('manage-applications')}}">Manage Applications</a></li>
                                <li><a href="{{route('browse-resumes')}}">Browse Resumes</a></li>
                            </ul>
                        </li>

                        <li><a href="{{route('blog-page')}}">Blog</a></li>

                    </ul>


                    <ul class="responsive float-right">
                        <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Sign Up</a></li>
                        <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Log In</a></li>
                    </ul>

                </nav>

                <!-- Navigation -->
                <div id="mobile-navigation">
                    <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
                </div>

            </div>
        </div>
    </header>

    <!-- Banner
================================================== -->
    <div id="banner" style="background-image: url(front/images/banner-home-01.jpg)" class="parallax background" data-img-width="2000" data-img-height="1330" data-diff="400">
        <div class="container">
            <div class="sixteen columns">

                <div class="search-container">

                    <!-- Form -->
                    <h2>Find job</h2>
                    <input type="text" class="ico-01" placeholder="job title, keywords or company name" value=""/>
                    <input type="text" class="ico-02" placeholder="city, province or region" value=""/>
                    <button><i class="fa fa-search"></i></button>

                    <!-- Browse Jobs -->
                    <div class="browse-jobs">
                        Browse job offers by <a href="browse-categories.html"> category</a> or <a href="#">location</a>
                    </div>

                    <!-- Announce -->
                    <div class="announce">
                        We’ve over <strong>15 000</strong> job offers for you!
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->

    <!-- Icon Boxes -->
    <div class="section-background top-0">
        <div class="container">

            <div class="one-third column">
                <div class="icon-box rounded alt">
                    <i class="ln ln-icon-Folder-Add"></i>
                    <h4>Add Resume</h4>
                    <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                </div>
            </div>

            <div class="one-third column">
                <div class="icon-box rounded alt">
                    <i class="ln ln-icon-Search-onCloud"></i>
                    <h4>Search For Jobs</h4>
                    <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                </div>
            </div>

            <div class="one-third column">
                <div class="icon-box rounded alt">
                    <i class="ln ln-icon-Business-ManWoman"></i>
                    <h4>Find Crew</h4>
                    <p>Pellentesque habitant morbi tristique senectus netus ante et malesuada fames ac turpis egestas maximus neque.</p>
                </div>
            </div>

        </div>
    </div>
    <!-- Icon Boxes / End -->


    <div class="container">

        <!-- Recent Jobs -->
        <div class="eleven columns">
            <div class="padding-right">
                <h3 class="margin-bottom-25">Recent Jobs</h3>
                <ul class="job-list">

                    <li class="highlighted"><a href="job-page.html">
                            <img src="{{asset('/')}}front/images/job-list-logo-01.png" alt="">
                            <div class="job-list-content">
                                <h4>Marketing Coordinator - SEO / SEM Experience <span class="full-time">Full-Time</span></h4>
                                <div class="job-icons">
                                    <span><i class="fa fa-briefcase"></i> King</span>
                                    <span><i class="fa fa-map-marker"></i> Sydney</span>
                                    <span><i class="fa fa-money"></i> $100 / hour</span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </li>

                    <li><a href="job-page.html">
                            <img src="{{asset('/')}}front/images/job-list-logo-02.png" alt="">
                            <div class="job-list-content">
                                <h4>Core PHP Developer for Site Maintenance <span class="part-time">Part-Time</span></h4>
                                <div class="job-icons">
                                    <span><i class="fa fa-briefcase"></i> Cubico</span>
                                    <span><i class="fa fa-map-marker"></i> London</span>
                                    <span><i class="fa fa-money"></i> $50 / hour</span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </li>

                    <li><a href="job-page.html">
                            <img src="{{asset('/')}}front/images/job-list-logo-03.png" alt="">
                            <div class="job-list-content">
                                <h4>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h4>
                                <div class="job-icons">
                                    <span><i class="fa fa-briefcase"></i> King</span>
                                    <span><i class="fa fa-map-marker"></i> Sydney</span>
                                    <span><i class="fa fa-money"></i> $15 / hour</span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </li>

                    <li><a href="job-page.html">
                            <img src="{{asset('/')}}front/images/job-list-logo-04.png" alt="">
                            <div class="job-list-content">
                                <h4>Power Systems User Experience Designer  <span class="internship">Internship</span></h4>
                                <div class="job-icons">
                                    <span><i class="fa fa-briefcase"></i> Hexagon</span>
                                    <span><i class="fa fa-map-marker"></i> London</span>
                                    <span><i class="fa fa-money"></i> $75 / hour</span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </li>

                    <li><a href="job-page.html">
                            <img src="{{asset('/')}}front/images/job-list-logo-05.png" alt="">
                            <div class="job-list-content">
                                <h4>iPhone / Android Music App Development <span class="temporary">Temporary</span></h4>
                                <div class="job-icons">
                                    <span><i class="fa fa-briefcase"></i> Mates</span>
                                    <span><i class="fa fa-map-marker"></i> New York</span>
                                    <span><i class="fa fa-money"></i> $115 / hour</span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                </ul>

                <a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
                <div class="margin-bottom-55"></div>
            </div>
        </div>

        <!-- Job Spotlight -->
        <div class="five columns">
            <h3 class="margin-bottom-5">Job Spotlight</h3>

            <!-- Navigation -->
            <div class="showbiz-navigation">
                <div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
                <div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
            </div>
            <div class="clearfix"></div>

            <!-- Showbiz Container -->
            <div id="job-spotlight" class="showbiz-container">
                <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
                    <div class="overflowholder">

                        <ul>

                            <li>
                                <div class="job-spotlight">
                                    <a href="#"><h4>Social Media: Advertising Coordinator <span class="part-time">Part-Time</span></h4></a>
                                    <span><i class="fa fa-briefcase"></i> Mates</span>
                                    <span><i class="fa fa-map-marker"></i> New York</span>
                                    <span><i class="fa fa-money"></i> $20 / hour</span>
                                    <p>As advertising & content coordinator, you will support our social media team in producing high quality social content for a range of media channels.</p>
                                    <a href="job-page.html" class="button">Apply For This Job</a>
                                </div>
                            </li>

                            <li>
                                <div class="job-spotlight">
                                    <a href="#"><h4>Prestashop / WooCommerce Product Listing <span class="freelance">Freelance</span></h4></a>
                                    <span><i class="fa fa-briefcase"></i> King</span>
                                    <span><i class="fa fa-map-marker"></i> London</span>
                                    <span><i class="fa fa-money"></i> $25 / hour</span>
                                    <p>Etiam suscipit tellus ante, sit amet hendrerit magna varius in. Pellentesque lorem quis enim venenatis pellentesque.</p>
                                    <a href="job-page.html" class="button">Apply For This Job</a>
                                </div>
                            </li>

                            <li>
                                <div class="job-spotlight">
                                    <a href="#"><h4>Logo Design <span class="freelance">Freelance</span></h4></a>
                                    <span><i class="fa fa-briefcase"></i> Hexagon</span>
                                    <span><i class="fa fa-map-marker"></i> Sydney</span>
                                    <span><i class="fa fa-money"></i> $10 / hour</span>
                                    <p>Proin ligula neque, pretium et ipsum eget, mattis commodo dolor. Etiam tincidunt libero quis commodo.</p>
                                    <a href="job-page.html" class="button">Apply For This Job</a>
                                </div>
                            </li>


                        </ul>
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>


    <!-- Testimonials -->
    <div id="testimonials">
        <!-- Slider -->
        <div class="container">
            <div class="sixteen columns">
                <div class="testimonials-slider">
                    <ul class="slides">
                        <li>
                            <p>I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.
                                <span>Collis Ta’eed, Envato</span></p>
                        </li>

                        <li>
                            <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat. Donec dapibus efficitur arcu, a rhoncus lectus egestas elementum.
                                <span>John Doe</span></p>
                        </li>

                        <li>
                            <p>Maecenas congue sed massa et porttitor. Duis placerat commodo ex, ut faucibus est facilisis ac. Donec eleifend arcu sed sem posuere aliquet. Etiam lorem metus, suscipit vel tortor vitae.
                                <span>Tom Smith</span></p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Infobox -->
    <div class="infobox margin-bottom-0">
        <div class="container">
            <div class="sixteen columns">Start Building Your Own Job Board Now <a href="my-account.html">Get Started</a></div>
        </div>
    </div>


    <!-- Footer
        ================================================== -->
    <div class="margin-top-15"></div>
    <div id="footer">
        <!-- Main -->
        <div class="container">

            <div class="seven columns">
                <h4>About</h4>
                <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                <a href="#" class="button">Get Started</a>
            </div>

            <div class="three columns">
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Our Blog</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Hiring Hub</a></li>
                </ul>
            </div>

            <div class="three columns">
                <h4>Press</h4>
                <ul class="footer-links">
                    <li><a href="#">In the News</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Awards</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Timeline</a></li>
                </ul>
            </div>

            <div class="three columns">
                <h4>Browse</h4>
                <ul class="footer-links">
                    <li><a href="#">Freelancers by Category</a></li>
                    <li><a href="#">Freelancers in USA</a></li>
                    <li><a href="#">Freelancers in UK</a></li>
                    <li><a href="#">Freelancers in Canada</a></li>
                    <li><a href="#">Freelancers in Australia</a></li>
                    <li><a href="#">Find Jobs</a></li>

                </ul>
            </div>

        </div>

        <!-- Bottom -->
        <div class="container">
            <div class="footer-bottom">
                <div class="sixteen columns">
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    <div class="copyrights">©  Copyright 2015 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- ==========================Scripts======================== -->
<script src="{{asset('/')}}front/scripts/jquery-2.1.3.min.js"></script>
<script src="{{asset('/')}}front/scripts/custom.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.superfish.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.flexslider-min.js"></script>
<script src="{{asset('/')}}front/scripts/chosen.jquery.min.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}front/scripts/waypoints.min.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.counterup.min.js"></script>
<script src="{{asset('/')}}front/scripts/jquery.jpanelmenu.js"></script>
<script src="{{asset('/')}}front/scripts/stacktable.js"></script>
<script src="{{asset('/')}}front/scripts/headroom.min.js"></script>



<!-- Style Switcher
================================================== -->
<script src="{{asset('/')}}front/scripts/switcher.js"></script>

<div id="style-switcher">
    <h2>Style Switcher <a href="#"></a></h2>

    <div>
        <h3>Predefined Colors</h3>
        <ul class="colors" id="color1">
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="navy" title="Navy"></a></li>
            <li><a href="#" class="yellow" title="Yellow"></a></li>
            <li><a href="#" class="peach" title="Peach"></a></li>
            <li><a href="#" class="beige" title="Beige"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
            <li><a href="#" class="celadon" title="Celadon"></a></li>
            <li><a href="#" class="pink" title="Pink"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="brown" title="Brown"></a></li>
            <li><a href="#" class="cherry" title="Cherry"></a></li>
            <li><a href="#" class="cyan" title="Cyan"></a></li>
            <li><a href="#" class="gray" title="Gray"></a></li>
            <li><a href="#" class="olive" title="Olive"></a></li>
        </ul>

        <h3>Layout Style</h3>
        <div class="layout-style">
            <select id="layout-style">
                <option value="2">Wide</option>
                <option value="1">Boxed</option>
            </select>
        </div>

        <h3>Header Style</h3>
        <div class="layout-style">
            <select id="header-style">
                <option value="1">Style 1</option>
                <option value="2">Style 2</option>
                <option value="3">Style 3</option>
            </select>
        </div>

        <h3>Background Image</h3>
        <ul class="colors bg" id="bg">
            <li><a href="#" class="bg1"></a></li>
            <li><a href="#" class="bg2"></a></li>
            <li><a href="#" class="bg3"></a></li>
            <li><a href="#" class="bg4"></a></li>
            <li><a href="#" class="bg5"></a></li>
            <li><a href="#" class="bg6"></a></li>
            <li><a href="#" class="bg7"></a></li>
            <li><a href="#" class="bg8"></a></li>
            <li><a href="#" class="bg9"></a></li>
            <li><a href="#" class="bg10"></a></li>
            <li><a href="#" class="bg11"></a></li>
            <li><a href="#" class="bg12"></a></li>
            <li><a href="#" class="bg13"></a></li>
            <li><a href="#" class="bg14"></a></li>
            <li><a href="#" class="bg15"></a></li>
            <li><a href="#" class="bg16"></a></li>
        </ul>

        <h3>Background Color</h3>
        <ul class="colors bgsolid" id="bgsolid">
            <li><a href="#" class="green-bg" title="Green"></a></li>
            <li><a href="#" class="blue-bg" title="Blue"></a></li>
            <li><a href="#" class="orange-bg" title="Orange"></a></li>
            <li><a href="#" class="navy-bg" title="Navy"></a></li>
            <li><a href="#" class="yellow-bg" title="Yellow"></a></li>
            <li><a href="#" class="peach-bg" title="Peach"></a></li>
            <li><a href="#" class="beige-bg" title="Beige"></a></li>
            <li><a href="#" class="purple-bg" title="Purple"></a></li>
            <li><a href="#" class="red-bg" title="Red"></a></li>
            <li><a href="#" class="pink-bg" title="Pink"></a></li>
            <li><a href="#" class="celadon-bg" title="Celadon"></a></li>
            <li><a href="#" class="brown-bg" title="Brown"></a></li>
            <li><a href="#" class="cherry-bg" title="Cherry"></a></li>
            <li><a href="#" class="cyan-bg" title="Cyan"></a></li>
            <li><a href="#" class="gray-bg" title="Gray"></a></li>
            <li><a href="#" class="olive-bg" title="Olive"></a></li>
        </ul>
    </div>

    <div id="reset"><a href="#" class="button color">Reset</a></div>

</div>


</body>

<!-- Mirrored from www.vasterad.com/themes/workscout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2018 15:07:40 GMT -->
</html>
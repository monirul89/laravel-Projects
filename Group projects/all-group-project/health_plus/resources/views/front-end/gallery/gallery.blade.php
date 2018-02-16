@extends('front-end.master')

@section('title')
    Gallery
@endsection

@section('body')

    <div class="banner1 jarallax">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->


    <!-- Portfolio -->
    <div class="portfolio" id="specials">
        <div class="container">
            <h2 class="w3_heade_tittle_agile">Our Departments</h2>
            <p class="sub_t_agileits">Quality Care...</p>

            <div class="tabs tabs-style-bar">
                <nav>
                    <ul>
                        <li><a href="#section-bar-1" class="icon icon-box"><span>Department</span></a></li>
                        <li><a href="#section-bar-2" class="icon icon-display"><span>Team</span></a></li>
                    </ul>
                </nav>

                <div class="content-wrap">

                    <!-- Tab-1 -->
                    <section id="section-bar-1" class="agileits w3layouts">

                        <div class="gallery-grids">
                            @foreach($departments as $department)
                            <div class="col-md-4 col-sm-4 gallery-top">

                                <a href="#" class="swipebox">
                                    <figure class="effect-apollo">
                                        <img src="{{asset($department->department_image)}}" alt="Health Plus" class="img-responsive">
                                        <figcaption></figcaption>
                                    </figure>
                                </a>

                            </div>
                            @endforeach

                            <div class="clearfix"></div>
                        </div>
                    </section>
                    <!-- //Tab-1 -->


                    <section id="section-bar-1" class="agileits w3layouts">

                        <div class="gallery-grids">
                            @foreach($teams as $team)
                                <div class="col-md-4 col-sm-4 gallery-top">

                                    <a href="#" class="swipebox">
                                        <figure class="effect-apollo">
                                            <img src="{{asset($team->doctor_image)}}" alt="Health Plus" class="img-responsive">
                                            <figcaption></figcaption>
                                        </figure>
                                    </a>

                                </div>
                            @endforeach

                            <div class="clearfix"></div>
                        </div>
                    </section>
                </div><!-- //Content -->
            </div><!-- //Tabs -->

        </div>
    </div>
    <script src="{{asset('/')}}front/js/cbpFWTabs.js"></script>
    <script>
        (function() {
            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });
        })();
    </script>
    <script src="{{asset('/')}}front/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>

@endsection
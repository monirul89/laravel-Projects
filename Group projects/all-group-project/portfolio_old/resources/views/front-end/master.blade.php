<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from/ by HTTrack -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}front/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/')}}front/css/animate.css" type="text/css"/>
    <link href="{{asset('/')}}front/css/hover-min.css" rel="stylesheet" media="all" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/')}}front/css/elastic_grid.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/')}}front/css/hallooou.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/')}}front/css/main.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/')}}front/css/lightbox.css" type="text/css"/>
    <style>
        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .jssorb051 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb051 .i .b {
            fill: #fff;
            fill-opacity: 0.5;
            stroke: #000;
            stroke-width: 400;
            stroke-miterlimit: 10;
            stroke-opacity: 0.5;
        }

        .jssorb051 .i:hover .b {
            fill-opacity: .7;
        }

        .jssorb051 .iav .b {
            fill-opacity: 1;
        }

        .jssorb051 .i.idn {
            opacity: .3;
        }

        .jssora051 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora051 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora051:hover {
            opacity: .8;
        }

        .jssora051.jssora051dn {
            opacity: .5;
        }

        .jssora051.jssora051ds {
            opacity: .3;
            pointer-events: none;
        }

    </style>
</head>

<body>
<header>
    <section id="head">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 pr0">
                    <h4><i class="fa fa-phone"></i> +880 1915 047 779</h4>
                </div>
                <div class="col-md-8 col-xs-6 top_socile_icon pl0">
                    <a href="https://www.facebook.com/monirul89" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/monirul89/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/monirul89" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/monirul89" target="_blank" class="socile_icon_h_box1"
                               data-toggle="social_tooltip" data-placement="left" title="Facebook"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/monirul89/" class="socile_icon_h_box2" data-toggle="social_tooltip" data-placement="bottom"
                               title="Linkedin"></a>
                        </li>
                        <li>
                            <a href="https://github.com/monirul89" target="_blank" class="socile_icon_h_box3"
                               data-toggle="social_tooltip" data-placement="bottom" title="Github"></a>
                        </li>
                        <li>
                            <a href="#" class="socile_icon_h_box4" data-toggle="social_tooltip" data-placement="bottom"
                               title="Youtube"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <nav id="menu" class="navbar navbar-default menu_bar1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-2.html">
                    <img src="{{asset('/')}}front/images/logo.png" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('about-us')}}">About Us</a></li>
                    <li><a href="{{route('projects')}}">Portfolio</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('body')

<footer id="footer">

    <section id="fot">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-7">
                    <div class="">
                        <p>&copy; 2018 | <span>Md. Monirul Islam</span> All Right's Reserved</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-5">
                    <a href="https://www.facebook.com/monirul89" class="foot_socile_icon"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/monirul89/" class="foot_socile_icon"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="foot_socile_icon"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="foot_socile_icon"><i class="fa fa-youtube"></i></a>
                    <a href="https://github.com/monirul89" class="foot_socile_icon"><i class="fa fa-github"></i></a>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/monirul89" target="_blank" class="socile_icon_box1"
                               data-toggle="social_tooltip" data-placement="right" title="Facebook"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/monirul89/" class="socile_icon_box2" data-toggle="social_tooltip" data-placement="right"
                               title="Linkedin"></a>
                        </li>
                        <li>
                            <a href="#" class="socile_icon_box3" data-toggle="social_tooltip" data-placement="right"
                               title="twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="socile_icon_box4" data-toggle="social_tooltip" data-placement="right"
                               title="youtube"></a>
                        </li>
                        <li>
                            <a href="https://github.com/monirul89" target="_blank" class="socile_icon_box5"
                               data-toggle="social_tooltip" data-placement="right" title="Github"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer part end -->
<div class="scrolltop">
    <i class="fa fa-angle-double-up"></i>
</div>
<!-- PopUp form code start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Please Given Enter Your Information</h4>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <label for="recipient-name" class="control-label"><span class="req_span">*</span> Name :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="inputGroupSuccess2"
                               aria-describedby="inputGroupSuccess2Status" placeholder="Please Enter Your Name"
                               name="name" required>
                        <span style="color:red"> </span></div>
                    <label for="recipient-name" class="control-label"><span class="req_span">*</span> Phone:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input type="text" class="form-control" id="inputGroupSuccess2"
                               aria-describedby="inputGroupSuccess2Status" placeholder="Please Enter Your Phobe Number"
                               name="phone">
                        <span style="color:red"> </span></div>
                    <label for="recipient-name" class="control-label"><span class="req_span">*</span> Email :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" id="inputGroupSuccess2"
                               aria-describedby="inputGroupSuccess2Status" placeholder="Please Enter Your Email Address"
                               name="email">
                        <span style="color:red"> </span></div>
                    <div class="form-group">
                        <label for="message-text" class="control-label"><span class="req_span">*</span> Message:</label>
                        <textarea class="form-control" id="message-text" aria-describedby="inputGroupSuccess2Status"
                                  placeholder="Please Enter Your Messages" name="message"></textarea>
                        <span style="color:red"> </span></div>
                </div>
                <div class="modal-footer">
                    <a href="#">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </a>
                    <a href="#">
                        <button type="submit" class="btn btn-primary">Send message <span
                                    class="glyphicon glyphicon-send"></span></button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- PopUp form code ends -->

{{--<script type="text/javascript" src="{{asset('/')}}front/js/jquery-2.2.4.min.js"></script>--}}
<script type="text/javascript" src="{{asset('/')}}front/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}front/js/bootstrap.min.js"></script>

{{--<script src="{{asset('/')}}front/js/jssor.slider-25.2.0.min.js" type="text/javascript"></script>--}}
{{--<script type="text/javascript" src="{{asset('/')}}front/js/myscript_jssor_slider.js"></script>--}}
{{--<script type="text/javascript">--}}
    {{--jssor_1_slider_init();--}}

{{--</script>--}}

{{--<script type="text/javascript" src="{{asset('/')}}front/js/menu_bar_fixed.js"></script>--}}
<script type="text/javascript" src="{{asset('/')}}front/js/smooth_scrolling.js"></script>
<script type="text/javascript" src="{{asset('/')}}front/js/scrolltop.js"></script>


<script type="text/javascript" src="{{asset('/')}}front/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}front/js/wow.min.js"></script>


<script src="{{asset('/')}}front/js/modernizr.custom.js"></script>
<script src="{{asset('/')}}front/js/classie.js"></script>
<!--- uncompress-->

<script type="text/javascript" src="{{asset('/')}}front/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="{{asset('/')}}front/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="{{asset('/')}}front/js/elastic_grid.js"></script>


<!-- Progress Bar start -->
<script type="text/javascript" src="{{asset('/')}}front/js/pie-chart.js"></script>

{{--<script type="text/javascript" src="{{asset('/')}}front/js/coustom.js"></script>--}}

<script type="text/javascript">
    $(document).ready(function () {
        $('#demo-pie-1').pieChart({
            barColor: '#68b828',
            trackColor: '#d6cfcf',
            lineCap: 'round',
            lineWidth: 7,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-2').pieChart({
            barColor: '#8465d4',
            trackColor: '#d6cfcf',
            lineCap: 'butt',
            lineWidth: 7,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-3').pieChart({
            barColor: '#f0aa0d',
            trackColor: '#d6cfcf',
            lineCap: 'square',
            lineWidth: 7,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-4').pieChart({
            barColor: '#f01010',
            trackColor: '#d6cfcf',
            lineCap: 'round',
            lineWidth: 7,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });
        $('#demo-pie-5').pieChart({
            barColor: '#103bf0',
            trackColor: '#d6cfcf',
            lineCap: 'round',
            lineWidth: 7,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });
        $('#demo-pie-6').pieChart({
            barColor: '#12a0ba',
            trackColor: '#d6cfcf',
            lineCap: 'round',
            lineWidth: 7,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });
    });

</script>
<!-- Progress Bar ends -->


<script>
    new WOW().init();

</script>
<!-- wow.js active codes -->


<script>
    $(document).ready(function () {
        $('.google-map').click(function () {
            $('.google-map iframe').css("pointer-events", "auto");
        });
        $(".google-map").mouseleave(function () {
            $('.google-map iframe').css("pointer-events", "none");
        });
    });

</script>
<!-- google-maps iframe zoomeIn adn zoomOUt Control -->

<script>
    $(function () {
        $('[data-toggle="social_tooltip"]').tooltip()
    });

</script>
<!-- tooltip hover text code ends -->

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Please Given Enter Your Information')
        modal.find('.modal-body input').val(recipient)
    })

</script>
<!-- PopUp form js active codes -->


<script type='text/javascript'>
    var isCtrl = false;
    document.onkeyup = function (e) {
        if (e.which == 17)
            isCtrl = false;
    }
    document.onkeydown = function (e) {
        if (e.which == 17)
            isCtrl = true;
        if ((e.which == 85) || (e.which == 67) && (isCtrl == true)) {
            return false;
        }
    }
    var isNS = (navigator.appName == "Netscape") ? 1 : 0;
    if (navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

    function mischandler() {
        return false;
    }

    function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }

    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
</script>
<!-- No-Copy-no-Select-no-hidden-source-code -->


{{--<script src="{{asset('/')}}front/js/jquery.poptrox.min.js"></script>--}}
{{--<script src="{{asset('/')}}front/js/jquery.scrolly.min.js"></script>--}}
{{--<script src="{{asset('/')}}front/js/jquery.scrollex.min.js"></script>--}}
{{--<script src="{{asset('/')}}front/js/skel.min.js"></script>--}}
{{--<script src="{{asset('/')}}front/js/util.js"></script>--}}
{{--<script src="{{asset('/')}}front/js/main.js"></script>--}}

<script src="{{asset('/')}}front/js/popper.min.js"></script>
<script src="{{asset('/')}}front/js/lightbox-plus-jquery.min.js"></script>

</body>


<!-- Mirrored from ruhulbd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2018 17:04:44 GMT -->
</html>

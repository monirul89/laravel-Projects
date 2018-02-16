<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Top work || @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('/')}}admin/css/bootstrap-theme.css" rel="stylesheet">
    <!-- font icon -->
    <link href="{{asset('/')}}admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/jsdatatable.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('/')}}admin/css/animate.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('/')}}admin/js/html5shiv.js"></script>
    <script src="{{asset('/')}}admin/js/respond.min.js"></script>
    <script src="{{asset('/')}}admin/js/lte-ie7.js"></script>
    <![endif]-->

</head>

<body>

<!-- container section start -->
<section id="container" class="">
    <!--header start-->
@include('admin.includes.header')
<!--header end-->

    <!--sidebar start-->
@include('admin.includes.sidebar_menu')
<!--sidebar end-->

    <!--main content start-->
    <section id="main-content">

        @yield('search-body')

    </section>
    <!--main content end-->
</section>
<!-- container section end -->

<!-- javascripts -->
<script src="{{asset('/')}}admin/js/jquery.js"></script>
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="{{asset('/')}}admin/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('/')}}admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('/')}}admin/js/jsdatatable.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "pagingType": "full_numbers"
        });
    });
</script>
<script src="{{asset('/')}}admin/js/jquery.sparkline.js"></script>
<script type="text/javascript">
    $(".colorbox span").click(function(){
        $(".colors").toggleClass("colorright");
    });
    function color(col){
        $("#header").css("background-color", col);
        $('.sidebar-menu li a, .sidebar-menu .sub li a ').mouseover(
            function () {
                $(this).css("background-color",col);
            }
        );
    }
    function color1(cols){
        $("#sidebar").css("background-color", cols);
        $(".sidebar-menu li a").css("background-color", cols);
        $(".sidebar-menu .sub li a").css("background-color", cols);
        $('.sidebar-menu li a, .sidebar-menu .sub li a ').mouseout(
            function () {
                $(this).css("background-color",cols);
            }
        );
    }

</script>

<!--custome script for all page-->
<script src="{{asset('/')}}admin/js/scripts.js"></script>

</body>
</html>

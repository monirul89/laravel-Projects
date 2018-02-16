<!DOCTYPE html>
<html lang="en">
<head>
    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('/') }}front/img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{ asset('/') }}front/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{ asset('/') }}front/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/superslides.css">
    <!-- Slick slider css file -->
    <link href="{{ asset('/') }}front/css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href="{{ asset('/') }}front/css/jquery.circliful.css">
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{ asset('/') }}front/css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="{{ asset('/') }}front/css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{ asset('/') }}front/css/style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
@include('front-end.includes.header')


@yield('banner')


@yield('body')

<!--=========== BEGIN FOOTER SECTION ================-->
@include('front-end.includes.footer')
<!--=========== END FOOTER SECTION ================-->



<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="{{ asset('/') }}front/js/jquery.min.js"></script>

<!-- For smooth animatin  -->
<script src="{{ asset('/') }}front/js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="{{ asset('/') }}front/js/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="{{ asset('/') }}front/js/slick.min.js"></script>
<!-- superslides slider -->
<script src="{{ asset('/') }}front/js/jquery.easing.1.3.js"></script>
<script src="{{ asset('/') }}front/js/jquery.animate-enhanced.min.js"></script>
<script src="{{ asset('/') }}front/js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script src="{{ asset('/') }}front/js/jquery.circliful.min.js"></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="{{ asset('/') }}front/js/jquery.tosrus.min.all.js"></script>

<!-- Custom js-->
<script src="{{ asset('/') }}front/js/custom.js"></script>
<!--===============================================
Template Design By WpFreeware Team.
Author URI : http://www.wpfreeware.com/
====================================================-->


</body>
</html>
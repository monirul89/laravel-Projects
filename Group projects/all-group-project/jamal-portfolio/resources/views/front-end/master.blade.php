<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="{{asset('/')}}front/favicon.ico">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/slider/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/owl-carousel/owl.theme.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/facncybox/jquery.fancybox.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
</head>
<body>


<!--
==================================================
Header Section Start
================================================== -->
@include('front-end.includes.header')


@yield('body')



<!--
    ==================================================
    Call To Action Section Start
    ================================================== -->
@include('front-end.includes.footer')

 <!-- /#footer -->

<!-- Template Javascript Files
================================================== -->
<!-- jquery -->
<script src="{{asset('/')}}front/plugins/jQurey/jquery.min.js"></script>
<!-- Form Validation -->
<script src="{{asset('/')}}front/plugins/form-validation/jquery.form.js"></script>
<script src="{{asset('/')}}front/plugins/form-validation/jquery.validate.min.js"></script>
<!-- owl carouserl js -->
<script src="{{asset('/')}}front/plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('/')}}front/plugins/bootstrap/bootstrap.min.js"></script>
<!-- wow js -->
<script src="{{asset('/')}}front/plugins/wow-js/wow.min.js"></script>
<!-- slider js -->
<script src="{{asset('/')}}front/plugins/slider/slider.js"></script>
<!-- Fancybox -->
<script src="{{asset('/')}}front/plugins/facncybox/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="{{asset('/')}}front/js/main.js"></script>
</body>
</html>
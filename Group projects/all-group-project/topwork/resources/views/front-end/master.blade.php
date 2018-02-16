<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from www.vasterad.com/themes/workscout/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2018 15:08:55 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title> Topwork || @yield('title')</title>

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
    <link rel="stylesheet" href="{{asset('/')}}admin/css/custom.css">

</head>

<body>
<div id="wrapper">

    <!-- ===========================Start header ======================= -->

    @include('front-end.includes.header')

    <!-- =========================== End header ======================= -->

    <div class="clearfix"></div>
    <!-- =========================body========================= -->
    @yield('body')
    <!-- ===========================Footer ======================= -->
    <div class="margin-top-15"></div>

    <!-- ===========================Start header ======================= -->

    @include('front-end.includes.footer')

    <!-- =========================== End header ======================= -->
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
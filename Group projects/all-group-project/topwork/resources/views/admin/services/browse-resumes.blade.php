<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Top work || Browse Resume</title>

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
        <section class=" wrapper">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Browse Resume</h2>
                        </div>
                        <div class="panel-body">
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Short Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Short Description</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @php($i=1)
                                @foreach($candidates as $candidate)

                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $candidate->candidate_name }}</td>
                                    <td>{{ $candidate->selected_skill }}</td>
                                    <td>{{ $candidate->	candidate_email }}</td>
                                    <td>{!! $candidate->resume_description !!}</td>
                                    <td class="center" width="80">
                                        <a class="btn btn-warning btn-xs" href="#">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </section>
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Table</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/')}}admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/')}}admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{asset('/')}}admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('/')}}admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/')}}admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/')}}admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    @include('admin.includes.header')
    <!-- /.navbar-top-links -->

    @include('admin.includes.side-menu')
    <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>VISSION TITLE</th>
                                <th>VISSION DESCRIPTION</th>
                                <th>MISSION TITLE</th>
                                <th>MISSION DESCRIPTION</th>
                                <th>GOAL TITLE</th>
                                <th>GOAL DESCRIPTION</th>
                                <th>PUBLISHED STATUS</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php($i=1)
                            @foreach($addContents as $addContent)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$addContent->vission_title}}</td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="{{route('edit-vission', ['id'=>$addContent->id])}}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    {{$addContent->vission_content}}
                                    </td>

                                <td>{{$addContent->mission_title}}</td>
                                <td><a class="btn btn-success btn-xs" href="{{route('edit-mission', ['id'=>$addContent->id])}}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    {{$addContent->mission_content}}
                                </td>
                                <td>{{$addContent->goal_title}}</td>
                                <td><a class="btn btn-success btn-xs" href="{{route('edit-goal', ['id'=>$addContent->id])}}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    {{$addContent->goal_content}}
                                </td>
                                <td>{{$addContent->published_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td class="center" width="80">
                                    @if($addContent->published_status == 1)
                                    <a href="{{route('home', ['id'=>$addContent->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                        <a class="btn btn-warning btn-xs" href="{{route('published-home-content', ['id'=>$addContent->id])}}">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a class="btn btn-danger btn-xs" href="#" onclick="return confirm('Are you sure to delete this !!')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>

                             @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{asset('/')}}admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/')}}admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/')}}admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="{{asset('/')}}admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="{{asset('/')}}admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('/')}}admin/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
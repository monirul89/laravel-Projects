@extends('admin.master')
@section('title')
    View Food Details
@endsection
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>View Food <small>Details</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
{{--                <p class="text-muted font-13 m-b-30">{{Session::get('message')}}</p>--}}
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <tr>
                        <th>Food Id</th>
                        <td>{{$foods->id}}</td>
                    </tr>
                    <tr>
                        <th>Category Id</th>
                        <td>{{$foods->category_id}}</td>
                    </tr>
                    <tr>
                        <th>Food Name</th>
                        <td>{{$foods->food_name}}</td>
                    </tr>
                    <tr>
                        <th>Food Price (TK.)</th>
                        <td>{{$foods->food_price}}</td>
                    </tr>
                    <tr>
                        <th>Food Quantity</th>
                        <td>{{$foods->food_quantity}}</td>
                    </tr>
                    <tr>
                        <th>Food Image</th>
                        <td><img src="{{asset($foods->food_image)}}" alt="Food Image" height="230" width="230"></td>
                    </tr>
                    <tr>
                        <th>Food Description</th>
                        <td>{{$foods->food_description}}</td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>{{$foods->publication_status== 1 ? 'Published' : 'Unpublished'}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection

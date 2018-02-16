@extends('admin.master')
@section('title')
    Manage-Food
@endsection
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Manage <small>Food</small></h2>
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
                <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Food Name</th>
                        <th>Food Price (TK.)</th>
                        <th>Food Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($foods as $food)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$food->category_name}}</td>
                        <td>{{$food->food_name}}</td>
                        <td>{{$food->food_price}}</td>
                        <td><img src="{{asset($food->food_image)}}" alt="Food Image" height="50" width="50"></td>
                        <td>{{$food->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                        <td>
                            <a href="{{route('view-food', ['id'=>$food->id])}}" class="btn btn-primary btn-xs">
                                <span class="glyphicon glyphicon-zoom-in"></span>
                            </a>
                            @if($food->publication_status == 1)
                                <a href="{{route('unpublished-food', ['id'=>$food->id])}}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                            @else
                                <a href="{{route('published-food', ['id'=>$food->id])}}" class="btn btn-warning btn-xs">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                            @endif
                            <a href="{{route('edit-food', ['id'=>$food->id])}}" class="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="{{route('delete-food', ['id'=>$food->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you suru to delete!!!')">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
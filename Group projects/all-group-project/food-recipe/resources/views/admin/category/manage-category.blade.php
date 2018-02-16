@extends('admin.master')
@section('title')
    Manage-Category
@endsection
@section('content')
    <div class="col-md-12 col-sm-10 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Manage Category</h2>
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
                <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            </div>
            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$category->category_name}}</td>
                        <td>{!! $category->category_description !!}</td>
                        <td>
                            @if($category->publication_status == 1)
                                <a href="{{route('unpublished-category', ['id'=>$category->id])}}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                            @else
                                <a href="{{route('published-category', ['id'=>$category->id])}}" class="btn btn-warning btn-xs">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                            @endif

                            <a href="{{route('edit-category', ['id'=>$category->id])}}" class="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="{{route('delete-category', ['id'=>$category->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you suru to delete!!!')">
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
@extends('admin.master')

@section('title')
    Manage Categories Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Manage Categories
@endsection

@section('page-header')
    Manage Categories
@endsection

@section('page-contents')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">Manage All Categories</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    <table class="table table-bordered">
                        <tr class="bg-blue">
                            <th>SL No</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{$category->category_description}}</td>
                                <td>{{$category->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                        <a href="{{ route('unpublished-category', ['id'=>$category->id ])  }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span></a>
                                    @else
                                        <a href="{{ route('published-category', ['id'=>$category->id ])  }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span></a>
                                    @endif

                                    <a href="{{ route('edit-category', ['id'=>$category->id ]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span></a>

                                    <a href="{{ route('delete-category', ['id'=>$category->id ]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')">
                                        <span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
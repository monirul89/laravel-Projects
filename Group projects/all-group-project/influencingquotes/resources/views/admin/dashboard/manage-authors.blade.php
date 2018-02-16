@extends('admin.master')

@section('title')
    Manage Authors Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Manage Authors
@endsection

@section('page-header')
    Manage Authors
@endsection

@section('page-contents')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">Manage All Authors</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4 "> {{ Session::get('message') }} </h5>
                    <table class="table table-bordered">
                        <tr class="bg-blue">
                            <th>SL No</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($author as $author)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $author->author_name }}</td>
                                <td>{{ $author->author_bio }}</td>
                                <td>{{ $author->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($author->publication_status == 1)
                                        <a href="{{ route('unpublished-author', ['id'=> $author->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-author', ['id'=> $author->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-author', ['id'=> $author->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-author', ['id'=>$author->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')" >
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
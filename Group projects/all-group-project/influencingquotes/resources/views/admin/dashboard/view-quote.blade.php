@extends('admin.master')

@section('title')
    View Quotes Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    View Quotes
@endsection

@section('page-header')
    View Quotes
@endsection

@section('page-contents')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">View Details Info</h4>
                </div> <br/>
                <h5 style="margin-left:20px;"><a href="{{route('back')}}">Back to Manage Quotes</a></h5>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Quote ID</th>
                            <td>{{ $blog->id  }}</td>
                        </tr>
                        <tr>
                            <th>Category ID</th>
                            <td>{{ $blog->category_id  }}</td>
                        </tr>
                        <tr>
                            <th>Author ID</th>
                            <td>{{ $blog->author_id  }}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $blog->category_name  }}</td>
                        </tr>
                        <tr>
                            <th>Author Name</th>
                            <td>{{ $blog->author_name  }}</td>
                        </tr>
                        <tr>
                            <th>Quote Title</th>
                            <td>{{ $blog->quote_title  }}</td>
                        </tr>

                        <tr>
                            <th>Quote Description</th>
                            <td>{{ $blog->quote_description  }}</td>
                        </tr>
                        <tr>
                            <th>Quote Image</th>
                            <td><img src="{{asset($blog->quote_image)}}" alt=" " height="180" width="180" /></td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{!! $blog->publication_status ==1 ? 'Published' : 'Unpublished' !!}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
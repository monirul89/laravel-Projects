@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">View Blog Details</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Blog Id</th>
                            <td>{{ $blog->id  }}</td>
                        </tr>
                        <tr>
                            <th>Blog Title</th>
                            <td>{{ $blog->blog_title  }}</td>
                        </tr>
                        <tr>
                            <th>Blog Writer</th>
                            <td>{{ $blog->blog_writer  }}</td>
                        </tr>
                        <tr>
                            <th>Blog Published Date</th>
                            <td>{{ $blog->blog_published_date  }}</td>
                        </tr>
                        <tr>
                            <th>Blog Image</th>
                            <td><img src="{{asset($blog->blog_image)}}" alt="" height="150px;" width="150px;"/></td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{ $blog->short_description }}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{!! $blog->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $blog->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
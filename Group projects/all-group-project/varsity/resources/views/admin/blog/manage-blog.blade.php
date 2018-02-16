@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Blogs Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL No</th>
                            <th>Blog Title</th>
                            <th>Blog Writer</th>
                            <th>Blog Published Date</th>
                            <th>Short Description</th>
                            <th>Blog Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->blog_writer }}</td>
                                <td>{{ $blog->blog_published_date }}</td>
                                <td>{{ $blog->short_description }}</td>
                                <td><img src="{{asset($blog->blog_image)}}" alt=" " height="120" width="120" /></td>
                                <td>{{ $blog->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($blog->publication_status == 1)
                                        <a href="{{ route('unpublished-blog', ['id'=>$blog->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-blog', ['id'=>$blog->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('view-blog', ['id'=>$blog->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    <a href="{{ route('edit-blog', ['id'=>$blog->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-blog', ['id'=>$blog->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this blog??')" >
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
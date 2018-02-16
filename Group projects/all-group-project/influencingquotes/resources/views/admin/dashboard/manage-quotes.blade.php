@extends('admin.master')

@section('title')
    Manage Quotes Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Manage Quotes
@endsection

@section('page-header')
    Manage Quotes
@endsection

@section('page-contents')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">Manage Brand Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SL No</th>
                            <th>Category Name</th>
                            <th>Author Name</th>
                            <th>Quote Title</th>
                            <th>Quote Description</th>
                            <th>Quote Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($blogs as $blog)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $blog->category_name }} </td>
                                <td> {{ $blog->author_name }} </td>
                                <td>{{ $blog->quote_title }} </td>
                                <td> {!! $blog->quote_description !!} </td>
                                <td><img src="{{asset($blog->quote_image)}}" alt=" " height="40" width="40" /> </td>
                                <td> {{ $blog->publication_status ==1 ? 'Published' : 'Unpublished' }} </td>
                                <td>
                                    <a href="{{ route('view-quote', ['id'=>$blog->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    @if($blog->publication_status == 1)
                                        <a href="{{ route('unpublished-quote', ['id'=>$blog->id ])  }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span></a>
                                    @else
                                        <a href="{{ route('published-quote', ['id'=>$blog->id ])  }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span></a>
                                    @endif

                                    <a href="{{ route('edit-quote', ['id'=>$blog->id ]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-quote', ['id'=>$blog->id ]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')" >
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
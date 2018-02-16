@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage About Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <th>SL No</th>
                            <th>About Name</th>
                            <th>About Description</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($abouts as $about)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $about->about_name }}</td>
                                <td>{!! $about->about_description !!}</td>
                                <td> <img src="{{asset($about->about_image)}}" alt=" " height="120" width="120" /> </td>
                                <td>{{ $about->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>

                                    <a href="{{ route('view-about', ['id'=>$about->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>

                                    @if($about->publication_status == 1)
                                        <a href="{{ route('unpublished-about', ['id'=> $about->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-about', ['id'=> $about->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-about', ['id'=>$about->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-about', ['id'=> $about->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')" >
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
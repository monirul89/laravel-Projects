@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Gallery Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL No</th>
                            <th>Gallery Title</th>
                            <th>Gallery Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($galleries as $gallery)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $gallery->gallery_title }}</td>
                                <td><img src="{{asset($gallery->gallery_image)}}" alt=" " height="120" width="120" /></td>
                                <td>{{ $gallery->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($gallery->publication_status == 1)
                                        <a href="{{ route('unpublished-gallery', ['id'=> $gallery->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-gallery', ['id'=> $gallery->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-gallery', ['id'=> $gallery->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-gallery', ['id'=> $gallery->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this gallery??')" >
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
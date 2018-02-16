@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Welcome Service Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <th>SL No</th>
                            <th>Welcome Title</th>
                            <th>Welcome Description</th>
                            <th>Publication Status</th>
                            <th width="100">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($welcomes as $welcome)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $welcome->welcome_title }}</td>
                                <td>{!! $welcome->welcome_description !!}</td>
                                <td>{{ $welcome->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($welcome->publication_status == 1)
                                        <a href="{{ route('unpublished-welcome', ['id'=> $welcome->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-welcome', ['id'=> $welcome->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-welcome', ['id'=>$welcome->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-welcome', ['id'=> $welcome->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')" >
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
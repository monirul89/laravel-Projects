@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Department Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <th>SL No</th>
                            <th>Department Name</th>
                            <th>Department Title</th>
                            <th>Department Description</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th width="110">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $department->department_name }}</td>
                                <td>{{ $department->department_title }}</td>
                                <td>{!! $department->department_description !!}</td>
                                <td> <img src="{{asset($department->department_image)}}" alt=" " height="120" width="120" /> </td>
                                <td>{{ $department->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>

                                    @if($department->publication_status == 1)
                                        <a href="{{ route('unpublished-department', ['id'=> $department->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-department', ['id'=> $department->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-department', ['id'=>$department->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-department', ['id'=> $department->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')" >
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
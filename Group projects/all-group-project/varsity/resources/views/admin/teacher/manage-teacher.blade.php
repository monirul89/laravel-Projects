@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Teacher Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL No</th>
                            <th>Teacher Name</th>
                            <th>Teacher Email</th>
                            <th>Teacher Designation</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($teachers as $teacher)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $teacher->teacher_name }} </td>
                                <td> {{ $teacher->teacher_email }} </td>
                                <td>{{ $teacher->teacher_designation }} </td>
                                <td> <img src="{{asset($teacher->teacher_image)}}" alt=" " height="120" width="120" /> </td>
                                <td> {{ $teacher->publication_status == 1 ? 'Published' : 'Unpublished' }} </td>
                                <td>
                                    @if($teacher->publication_status == 1)
                                        <a href="{{ route('unpublished-teacher', ['id'=> $teacher->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else

                                        <a href="{{ route('published-teacher', ['id'=> $teacher->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ route('edit-teacher',['id'=>$teacher->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-teacher', ['id'=> $teacher->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Teacher??')" >
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
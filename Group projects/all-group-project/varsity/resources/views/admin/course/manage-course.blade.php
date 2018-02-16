@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Course Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL No</th>
                            <th>Course Title</th>
                            <th>Course Teacher</th>
                            <th>Course Price</th>
                            <th>Short Description</th>
                            <th>Course Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $course->course_title }}</td>
                                <td>{{ $course->teacher_name }}</td>
                                <td>{{ $course->course_price }}</td>
                                <td>{{ $course->short_description }}</td>
                                <td><img src="{{asset($course->course_image)}}" alt=" " height="120" width="120" /></td>
                                <td>{{ $course->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($course->publication_status == 1)
                                        <a href="{{ route('unpublished-course', ['id'=> $course->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-course', ['id'=> $course->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('view-course', ['id'=> $course->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    <a href="{{ route('edit-course', ['id'=> $course->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-course', ['id'=> $course->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Course??')" >
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
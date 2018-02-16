@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">View Course Details</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Course Id</th>
                            <td>{{ $course->id  }}</td>
                        </tr>
                        <tr>
                            <th>Course Title</th>
                            <td>{{ $course->course_title  }}</td>
                        </tr>
                        <tr>
                            <th>Course Image</th>
                            <td><img src="{{asset($course->course_image)}}" alt="" height="150px;" width="150px;"/></td>
                        </tr>
                        <tr>
                            <th>Teacher Id</th>
                            <td>{{ $course->teacher_id  }}</td>
                        </tr>
                        <tr>
                            <th>Course Price</th>
                            <td>{{ $course->course_price  }}</td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{ $course->short_description }}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{!! $course->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $course->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
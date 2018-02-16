@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Student Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL No</th>
                            <th>Student Name</th>
                            <th>Student Department</th>
                            <th>Student Status</th>
                            <th>Student's Comment</th>
                            <th>Student Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $student->student_name }}</td>
                                <td>{{ $student->department_name }}</td>
                                <td>{{ $student->student_status }}</td>
                                <td>{{ $student->students_comment }}</td>
                                <td><img src="{{asset($student->student_image)}}" alt=" " height="120" width="120" /></td>
                                <td>{{ $student->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($student->publication_status == 1)
                                        <a href="{{ route('unpublished-student', ['id'=>$student->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-student', ['id'=>$student->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-student', ['id'=>$student->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-student', ['id'=>$student->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Student??')" >
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
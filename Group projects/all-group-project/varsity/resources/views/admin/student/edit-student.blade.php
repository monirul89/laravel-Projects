@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Student Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'update-student', 'method'=>'POST', 'class'=>'form-horizontal', 'name'=>'editStudentForm', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Student Name</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="student_name" class="form-control" value="{{ $student->student_name }}" />
                            <input type="hidden" name="student_id" class="form-control" value="{{ $student->id }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Student Department</label>
                        <div class="form-group col-md-8">
                            <select name="department_id" class="form-control">
                                <option>--- Select Student Department ---</option>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Student Status</label>
                        <div class="form-group col-md-8">
                            <select name="student_status_id" class="form-control">
                                <option>--- Select Student Status ---</option>
                                @foreach($studentStatuses as $studentStatus)
                                    <option value="{{$studentStatus->id}}">{{ $studentStatus->student_status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Student's Comment</label>
                        <div class="form-group col-md-8">
                            <textarea name="students_comment" class="form-control">{{ $student->students_comment }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Student Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="student_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($student->student_image) }}" alt="" height="80px;" width="80px;"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $student->publication_status == 1 ? 'checked' : ' ' }}/>Published</label>
                            <label> <input type="radio" name="publication_status" value="0" {{ $student->publication_status == 0 ? 'checked' : ' ' }}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Student Info" />
                        </div>
                    </div>
                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editStudentForm'].elements['department_id'].value='{{ $student->department_id }}';
        document.forms['editStudentForm'].elements['student_status_id'].value='{{ $student->student_status_id }}';
    </script>
@endsection
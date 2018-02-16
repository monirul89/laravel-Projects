@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Add Student Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'save-student', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Student Name</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="student_name" class="form-control" />
                            <span class="text-danger">{{ $errors->has('student_name') ? $errors->first('student_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Student Department</label>
                        <div class="form-group col-md-8">
                            <select name="department_id" class="form-control">
                                <option value=" ">--- Select Student Department ---</option>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('department_id') ? $errors->first('department_id', 'Department name is required') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Student Status</label>
                        <div class="form-group col-md-8">
                            <select name="student_status_id" class="form-control">
                                <option value=" ">--- Select Student Status ---</option>
                                @foreach($studentStatuses as $studentStatus)
                                    <option value="{{$studentStatus->id}}">{{ $studentStatus->student_status }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('student_status_id') ? $errors->first('student_status_id', 'Student status is required') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Student's Comment</label>
                        <div class="form-group col-md-8">
                            <textarea name="students_comment" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('students_comment') ? $errors->first('students_comment') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Student Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="student_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('student_image') ? $errors->first('student_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" checked value="1" />Published</label>
                            <label> <input type="radio" name="publication_status" value="0" />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Student Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
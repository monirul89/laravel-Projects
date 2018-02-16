@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Student Status  Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'update-student-status', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Student Status</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="student_status" class="form-control" value="{{ $studentStatus->student_status }}" />
                            <input type="hidden" name="student_status_id" class="form-control" value="{{ $studentStatus->id }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $studentStatus->publication_status == 1 ? 'checked' : ' ' }} />Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" {{ $studentStatus->publication_status == 0 ? 'checked' : ' ' }} />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Student Status Info" />
                        </div>
                    </div>
                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
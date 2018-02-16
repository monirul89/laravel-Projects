@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Teacher Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'update-teacher', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Teacher Name</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="teacher_name" class="form-control" value="{{ $teacher->teacher_name }}" />
                            <input type="hidden" name="teacher_id" class="form-control" value="{{ $teacher->id }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Teacher Email</label>
                        <div class="form-group col-md-8">
                            <input type="email" name="teacher_email" class="form-control" value="{{ $teacher->teacher_email }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Teacher Designation</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="teacher_designation" class="form-control" value="{{ $teacher->teacher_designation }}" />
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Teacher Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="teacher_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($teacher->teacher_image) }}" alt="" height="80px" width="80px"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $teacher->publication_status == 1 ? 'checked' : ' ' }} />Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" {{ $teacher->publication_status == 1 ? 'checked' : ' ' }} />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Teacher Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
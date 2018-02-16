@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Department Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'update-department', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Department Name</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="department_name" class="form-control" value="{{ $department->department_name }}" />
                            <input type="hidden" name="department_id" class="form-control" value="{{ $department->id }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Department Description</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="department_description" class="form-control" value="{{ $department->department_description }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $department->publication_status == 1 ? 'checked' : ' ' }} />Published</label>
                            <label> <input type="radio" name="publication_status" value="0" {{ $department->publication_status == 0 ? 'checked' : ' ' }} />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Department Info" />
                        </div>
                    </div>
                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
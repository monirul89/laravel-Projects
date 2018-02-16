@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Department Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    {{ Form::open(['route'=>'save-department', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Department Name</label>
                        <div class="col-md-8">
                            <input type="text" name="department_name" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('department_name') ? $errors->first('department_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Department Title</label>
                        <div class="col-md-8">
                            <input type="text" name="department_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('department_title') ? $errors->first('department_title') : ' ' }}</span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-4">Department Description</label>
                        <div class="col-md-8">
                            <textarea name="department_description" id="editor" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('department_description') ? $errors->first('department_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Department Images</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="department_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('department_image') ? $errors->first('department_image') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" value="1" />Published</label>
                            <label><input type="radio" name="publication_status" value="0" />Unpublished</label>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save About Info"/>
                        </div>
                    </div>
                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
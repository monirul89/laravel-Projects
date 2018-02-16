@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Service Form</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    {{ Form::open(['route'=>'save-service', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Service Title</label>
                        <div class="col-md-8">
                            <input type="text" name="service_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('service_title') ? $errors->first('service_title') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Service Name</label>
                        <div class="col-md-8">
                            <input type="text" name="service_name" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('service_name') ? $errors->first('service_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Service Description</label>
                        <div class="col-md-8">
                            <textarea name="service_description" id="editor" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('service_description') ? $errors->first('service_description') : ' ' }}</span>
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
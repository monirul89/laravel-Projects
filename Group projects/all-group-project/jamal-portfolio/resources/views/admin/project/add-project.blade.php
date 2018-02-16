@extends('admin.master')

@section('title')
    Add Project || Jamal Portfolio
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-success text-center">Add Project Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success">{{Session::get('message')}}</h3>
                    {{Form::open(['route'=>'new-project','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <label class="control-label col-md-4">Service Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="service_id">
                                <option value="">--- Select Service Name ---</option>
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->service_name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{$errors->has('service_id') ? $errors->first('service_id'):' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Project Name</label>
                        <div class="col-md-8">
                            <input type="text" name="project_name" class="form-control" />
                            <span class="text-danger">{{$errors->has('project_name') ? $errors->first('project_name'):' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Project Description</label>
                        <div class="col-md-8">
                            <textarea name="project_description" id="editor" class="form-control"></textarea>
                            <span class="text-danger">{{$errors->has('project_description') ? $errors->first('project_description'):' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Project Image</label>
                        <div class="col-md-8">
                            <input type="file" name="project_image" accept="image/*"/>
                            <span class="text-danger">{{$errors->has('project_image') ? $errors->first('project_image'):' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" value="1" />Published</label>
                            <label><input type="radio" name="publication_status" value="0" />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Project Info" />
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection
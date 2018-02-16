@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Team Form</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    {{ Form::open(['route'=>'save-team', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Team Title</label>
                        <div class="col-md-8">
                            <input type="text" name="team_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('team_title') ? $errors->first('team_title') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="col-md-8">
                            <textarea name="short_description" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Name</label>
                        <div class="col-md-8">
                            <input type="text" name="doctor_name" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('doctor_name') ? $errors->first('doctor_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Speciality</label>
                        <div class="col-md-8">
                            <input type="text" name="doctor_speciality" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('doctor_speciality') ? $errors->first('doctor_speciality') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Consultant Type</label>
                        <div class="col-md-8">
                            <input type="text" name="doctor_consultant" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('doctor_consultant') ? $errors->first('doctor_consultant') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Images</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="doctor_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('doctor_image') ? $errors->first('doctor_image') : ' ' }}</span>
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
@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Team Info</h4>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route'=>'update-team', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Team Title</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$team->team_title}}" name="team_title" class="form-control"/>
                            <input type="hidden" value="{{$team->id}}" name="team_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="col-md-8">
                            <textarea name="short_description" class="form-control">{{$team->short_description}}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Name</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$team->doctor_name}}" name="doctor_name" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Speciality</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$team->doctor_speciality}}" name="doctor_speciality" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Consultant Type</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$team->doctor_consultant}}" name="doctor_consultant" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Doctor Images</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="doctor_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($team->doctor_image) }}" alt="" height="80px" width="80px"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" value="1" {{$team->publication_status == 1 ? 'checked': ' '}} />Published</label>
                            <label><input type="radio" name="publication_status" value="0" {{$team->publication_status == 0 ? 'checked': ' '}} />Unpublished</label>
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
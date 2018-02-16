@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit About Info</h4>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route'=>'update-about', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">About Name</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$about->about_name}}" name="about_name" class="form-control"/>
                            <input type="hidden" value="{{$about->id}}" name="about_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">About Description</label>
                        <div class="col-md-8">
                            <textarea name="about_description" class="form-control">{{$about->about_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">About Images</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="about_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($about->about_image) }}" alt="" height="80px" width="80px"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" value="1" {{$about->publication_status == 1 ? 'checked': ' '}} />Published</label>
                            <label><input type="radio" name="publication_status" value="0" {{$about->publication_status == 0 ? 'checked': ' '}} />Unpublished</label>
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
@extends('admin.master')
@section('title')
    About Us
@endsection
@section('content')
    <div class="x_content">
        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
        {{Form::open(['route'=>'update-about', 'method'=> 'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])}}
        <span class="section">About Us Page</span>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heading">Heading</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input  type="text" id="heading" class="form-control col-md-7 col-xs-12" value="{{$about->heading}}" name="heading" placeholder="Heading">
                <input  type="hidden" id="about_id" class="form-control col-md-7 col-xs-12" value="{{$about->id}}" name="about_id">
                <span class="text-danger">{{$errors->has('heading') ? $errors->first('heading') : ' '}}</span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input  type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{$about->title}}" placeholder="Title">
                <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ' '}}</span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_description">Short Description</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="short_description" name="short_description" class="form-control col-md-7 col-xs-12 textarea" placeholder="Short Description">{!! $about->short_description !!}</textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="long_description">Long Description</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="long_description" name="long_description" class="form-control col-md-7 col-xs-12 textarea" placeholder="Long Description">{!! $about->long_description !!}</textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="about_image">About Image</label>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <input id="about_image" type="file" name="about_image" class="form-control" accept="image/*"/>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="{{asset($about->about_image)}}" class="img-responsive" alt="About Image" height="100" width="100">
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Update About Us</button>
            </div>
        </div>
        {{Form::close()}}
    </div>
@endsection
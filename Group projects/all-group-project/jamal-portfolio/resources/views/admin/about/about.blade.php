@extends('admin.master')

@section('title')
    About || Jamal Portfolio
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Update About Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success">{{Session::get('message')}}</h3>
                    {{Form::open(['route'=>'update-about', 'method'=> 'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])}}
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="choose_me">Why Choose Me</label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <textarea id="choose_me" class="form-control col-md-7 col-xs-12 textarea" name="choose_me" placeholder="Why Choose Me">{!! $about->choose_me !!}</textarea>
                            <input  type="hidden" id="about_id" class="form-control col-md-7 col-xs-12" value="{{$about->id}}" name="about_id">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="what_get">What you get</label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <textarea id="what_get" class="form-control col-md-7 col-xs-12 textarea" name="what_get" placeholder="What you get">{{$about->what_get}}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="my_skill">My skills</label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <textarea id="my_skill" class="form-control col-md-7 col-xs-12 textarea" name="my_skill" placeholder="My skills">{{$about->my_skill}}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="main_description">Main Description</label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <textarea id="editor" name="main_description" class="form-control col-md-7 col-xs-12 textarea" placeholder="Main Description">{!! $about->main_description !!}</textarea>
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
                        <div class="col-md-9 col-md-offset-3">
                            <button id="send" type="submit" class="btn btn-success btn-block">Update About</button>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
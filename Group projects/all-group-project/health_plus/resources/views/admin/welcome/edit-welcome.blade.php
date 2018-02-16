@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Welcome Info</h4>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route'=>'update-welcome', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Welcome Title</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$welcome->welcome_title}}" name="welcome_title" class="form-control"/>
                            <input type="hidden" value="{{$welcome->id}}" name="welcome_id" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Welcome Description</label>
                        <div class="col-md-8">
                            <textarea name="welcome_description" class="form-control">{{$welcome->welcome_description}}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" value="1" {{$welcome->publication_status == 1 ? 'checked': ' '}} />Published</label>
                            <label><input type="radio" name="publication_status" value="0" {{$welcome->publication_status == 0 ? 'checked': ' '}} />Unpublished</label>
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
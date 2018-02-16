@extends('admin.master')

@section('title')
    Edit Service || Jamal Portfolio
@endsection


@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Service Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success">{{Session::get('message')}}</h3>
                    {{Form::open(['route'=>'update-service','method'=>'POST','class'=>'form-horizontal'])}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Service Name</label>
                            <div class="col-md-8">
                                <input type="text" value="{{$service->service_name}}" name="service_name" class="form-control"/>
                                <input type="hidden" value="{{$service->id}}" name="service_id" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Service Description</label>
                            <div class="col-md-8">
                                <textarea name="service_description" class="form-control">{{$service->service_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 radio">
                                <label><input type="radio" name="publication_status" value="1" {{$service->publication_status == 1 ? 'checked':''}}/>Published</label>
                                <label><input type="radio" name="publication_status" value="0" {{$service->publication_status == 0 ? 'checked':''}}/>Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Service Info"/>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
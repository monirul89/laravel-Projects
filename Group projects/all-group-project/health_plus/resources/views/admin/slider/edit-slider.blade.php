@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Slider Info</h4>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route'=>'update-slider', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Slider Title</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$slider->slider_title}}" name="slider_title" class="form-control"/>
                            <input type="hidden" value="{{$slider->id}}" name="slider_id" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Slider Sort Title</label>
                        <div class="col-md-8">
                            <input type="text" value="{{$slider->slider_sort_title}}" name="slider_sort_title" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Slider Description</label>
                        <div class="col-md-8">
                            <textarea name="slider_description" class="form-control">{{$slider->slider_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Slider Images</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="slider_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($slider->slider_image) }}" alt="" height="80px" width="80px"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" value="1" {{$slider->publication_status == 1 ? 'checked': ' '}} />Published</label>
                            <label><input type="radio" name="publication_status" value="0" {{$slider->publication_status == 0 ? 'checked': ' '}} />Unpublished</label>
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
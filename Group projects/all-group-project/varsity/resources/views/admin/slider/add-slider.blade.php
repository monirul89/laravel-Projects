@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Add Slider Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'save-slider', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Slider Heading</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="slider_heading" class="form-control" />
                            <span class="text-danger">{{ $errors->has('slider_heading') ? $errors->first('slider_heading') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Slider Description</label>
                        <div class="form-group col-md-8">
                            <textarea name="slider_description" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('slider_description') ? $errors->first('slider_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Slider Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="slider_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('slider_image') ? $errors->first('slider_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" checked value="1" />Published</label>
                            <label> <input type="radio" name="publication_status" value="0" />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Slider Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
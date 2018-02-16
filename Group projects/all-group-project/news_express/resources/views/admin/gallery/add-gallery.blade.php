@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Gallery Form</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    {{ Form::open(['route'=>'save-gallery', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}

                    <div class="form-group">
                        <label class="control-label col-md-4">Gallery Description</label>
                        <div class="col-md-8">
                            <textarea name="gallery_description" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('gallery_description') ? $errors->first('gallery_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Gallery Images</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="gallery_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('gallery_image') ? $errors->first('gallery_image') : ' ' }}</span>
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
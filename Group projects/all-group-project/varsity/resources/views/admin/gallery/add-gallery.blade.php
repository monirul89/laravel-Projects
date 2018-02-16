@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Add Gallery Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open([ 'route'=>'save-gallery', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Gallery Title</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="gallery_title" class="form-control" />
                            <span class="text-danger">{{ $errors->has('gallery_title') ? $errors->first('gallery_title') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Gallery Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="gallery_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('gallery_image') ? $errors->first('gallery_image') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" checked value="1" />Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Gallery Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
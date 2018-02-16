@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Gallery Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open([ 'route'=>'update-gallery', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Gallery Title</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="gallery_title" class="form-control" value="{{ $gallery->gallery_title }}" />
                            <input type="hidden" name="gallery_id" class="form-control" value="{{ $gallery->id }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Gallery Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="gallery_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($gallery->gallery_image) }}" alt="" height="80px;" width="80px;"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $gallery->publication_status == 1 ? 'checked' : ' ' }}/>Published</label>
                            <label> <input type="radio" name="publication_status" value="0" {{ $gallery->publication_status == 0 ? 'checked' : ' ' }}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Gallery Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
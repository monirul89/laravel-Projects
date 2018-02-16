@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Add Blogs Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open([ 'route'=>'save-blog', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Title</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="blog_title" class="form-control" />
                            <span class="text-danger">{{ $errors->has('blog_title') ? $errors->first('blog_title') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Writer</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="blog_writer" class="form-control" />
                            <span class="text-danger">{{ $errors->has('blog_writer') ? $errors->first('blog_writer') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Published Date</label>
                        <div class="form-group col-md-8">
                            <input type="date" name="blog_published_date" class="form-control" />
                            <span class="text-danger">{{ $errors->has('blog_published_date') ? $errors->first('blog_published_date') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="form-group col-md-8">
                            <textarea name="short_description" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Long Description</label>
                        <div class="form-group col-md-8">
                            <textarea id="editor" name="long_description" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="blog_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('blog_image') ? $errors->first('blog_image') : ' ' }}</span>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Blog Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
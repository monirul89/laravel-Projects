@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Blog Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open([ 'route'=>'update-blog', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Title</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="blog_title" class="form-control" value="{{ $blog->blog_title }}" />
                            <input type="hidden" name="blog_id" class="form-control" value="{{ $blog->id }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Writer</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="blog_writer" class="form-control" value="{{ $blog->blog_writer }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Published Date</label>
                        <div class="form-group col-md-8">
                            <input type="date" name="blog_published_date" class="form-control" value="{{ $blog->blog_published_date }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="form-group col-md-8">
                            <textarea name="short_description" class="form-control">{{ $blog->short_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Long Description</label>
                        <div class="form-group col-md-8">
                            <textarea id="editor" name="long_description" class="form-control">{{ $blog->long_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Blog Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="blog_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($blog->blog_image) }}" alt="" height="80px;" width="80px;"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $blog->publication_status == 1 ? 'checked' : ' ' }}/>Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" {{ $blog->publication_status == 0 ? 'checked' : ' ' }}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Blog Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editblogForm'].elements['teacher_id'].value='{{ $blog->teacher_id }}';
    </script>
@endsection
@extends('admin.master')

@section('body')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center text-primary">Add Course Form</h4>
            </div>
            <div class="panel-body">
                <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                {{ Form::open([ 'route'=>'save-course', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                <div class="form-group">
                    <label class="control-label col-md-4">Course Title</label>
                    <div class="form-group col-md-8">
                        <input type="text" name="course_title" class="form-control" />
                        <span class="text-danger">{{ $errors->has('course_title') ? $errors->first('course_title') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Course Teacher</label>
                    <div class="form-group col-md-8">
                        <select name="teacher_id" class="form-control">
                            <option value=" ">--- Select Course Teacher ---</option>
                            @foreach($teachers as $teacher)
                            <option value="{{$teacher->id}}">{{ $teacher->teacher_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->has('teacher_id') ? $errors->first('teacher_id', 'Teacher name is required') : ' ' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Course Price</label>
                    <div class="form-group col-md-8">
                        <input type="text" name="course_price" class="form-control" />
                        <span class="text-danger">{{ $errors->has('course_price') ? $errors->first('course_price') : ' ' }}</span>
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
                    <label class="control-label col-md-4">Course Image</label>
                    <div class="form-group col-md-8">
                        <input type="file" name="course_image" accept="image/*" class="form-control" />
                        <span class="text-danger">{{ $errors->has('course_image') ? $errors->first('course_image') : ' ' }}</span>
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
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Course Info" />
                    </div>
                </div>

                {{ Form::close()  }}
            </div>
        </div>
    </div>
</div>
@endsection
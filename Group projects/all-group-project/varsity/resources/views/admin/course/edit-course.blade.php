@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Course Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open([ 'route'=>'update-course', 'method'=>'POST', 'class'=>'form-horizontal', 'name'=>'editCourseForm', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Course Title</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="course_title" class="form-control" value="{{ $course->course_title }}" />
                            <input type="hidden" name="course_id" class="form-control" value="{{ $course->id }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Course Teacher</label>
                        <div class="form-group col-md-8">
                            <select name="teacher_id" class="form-control">
                                <option>--- Select Course Teacher ---</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Course Price</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="course_price" class="form-control" value="{{ $course->course_price }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="form-group col-md-8">
                            <textarea name="short_description" class="form-control">{{ $course->short_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Long Description</label>
                        <div class="form-group col-md-8">
                            <textarea id="editor" name="long_description" class="form-control">{{ $course->long_description }}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Course Images</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="course_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($course->course_image) }}" alt="" height="80px;" width="80px;"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $course->publication_status == 1 ? 'checked' : ' ' }}/>Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" {{ $course->publication_status == 0 ? 'checked' : ' ' }}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Course Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCourseForm'].elements['teacher_id'].value='{{ $course->teacher_id }}';
    </script>
@endsection
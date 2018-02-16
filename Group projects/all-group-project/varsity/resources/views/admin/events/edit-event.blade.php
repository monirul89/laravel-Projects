@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Event Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open([ 'route'=>'update-event', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Name</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="event_name" class="form-control" value="{{ $event->event_name }}" />
                            <input type="hidden" name="event_id" class="form-control" value="{{ $event->id }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Date</label>
                        <div class="form-group col-md-8">
                            <input type="date" name="event_date" class="form-control" value="{{ $event->event_date }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Time</label>
                        <div class="form-group col-md-8">
                            <input type="time" name="event_time" class="form-control" value="{{ $event->event_time }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Location</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="event_location" class="form-control" value="{{ $event->event_location }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="form-group col-md-8">
                            <textarea name="short_description" class="form-control">{{ $event->short_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Long Description</label>
                        <div class="form-group col-md-8">
                            <textarea id="editor" name="long_description" class="form-control">{{ $event->long_description }}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-4">Event Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="event_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($event->event_image) }}" alt="" height="80px;" width="80px;"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $event->publication_status == 1 ? 'checked' : ' ' }}/>Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" {{ $event->publication_status == 0 ? 'checked' : ' ' }}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Event Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editeventForm'].elements['teacher_id'].value='{{ $event->teacher_id }}';
    </script>
@endsection
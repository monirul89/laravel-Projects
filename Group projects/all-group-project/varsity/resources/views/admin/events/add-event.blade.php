@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Add Events Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open([ 'route'=>'save-event', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Name</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="event_name" class="form-control" />
                            <span class="text-danger">{{ $errors->has('event_name') ? $errors->first('event_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Date</label>
                        <div class="form-group col-md-8">
                            <input type="date" name="event_date" class="form-control" />
                            <span class="text-danger">{{ $errors->has('event_date') ? $errors->first('event_date') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Time</label>
                        <div class="form-group col-md-8">
                            <input type="time" name="event_time" class="form-control" />
                            <span class="text-danger">{{ $errors->has('event_time') ? $errors->first('event_time') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Event Location</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="event_location" class="form-control" />
                            <span class="text-danger">{{ $errors->has('event_location') ? $errors->first('event_location') : ' ' }}</span>
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
                        <label class="control-label col-md-4">Event Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="event_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('event_image') ? $errors->first('event_image') : ' ' }}</span>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Event Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Edit Skill Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'update-skill', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}

                    <div class="form-group">
                        <label class="control-label col-md-4">Skill Field</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="skill_field" class="form-control" value="{{ $skill->skill_field }}"/>
                            <input type="hidden" name="skill_id" class="form-control" value="{{ $skill->id }}"/>
                            <span class="text-danger">{{ $errors->has('skill_field') ? $errors->first('skill_field') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Skill Percent</label>
                        <div class="form-group col-md-8">
                            <input type="number" name="skill_percent" class="form-control" value="{{ $skill->skill_percent }}"/>
                            <span class="text-danger">{{ $errors->has('skill_percent') ? $errors->first('skill_percent') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" value="1" {{ $skill->publication_status == 1 ? 'checked' : ' ' }} />Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" {{ $skill->publication_status == 0 ? 'checked' : ' ' }} />Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Skill Info" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
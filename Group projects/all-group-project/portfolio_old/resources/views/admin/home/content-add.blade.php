@extends('admin.master')

@section('title')
    Add Content
@endsection

@section('body')

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center text-success">Add Content</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('save-content')}}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Vission Title</label>
                                <div class="form-group col-md-8">
                                    <input type="text" name="vission_title" placeholder="Vission Title" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Vission Content</label>
                                <div class="form-group col-md-8">
                                    <textarea name="vission_content" rows="8" class="form-control"placeholder="Vission Content"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Mission Title</label>
                                <div class="form-group col-md-8">
                                    <input type="text" name="mission_title" placeholder="Mission Title" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Mission Content</label>
                                <div class="form-group col-md-8">
                                    <textarea name="mission_content" rows="8" class="form-control" placeholder="Mission Content" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Goal Title</label>
                                <div class="form-group col-md-8">
                                    <input type="text" name="goal_title" placeholder="Goal Title" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Goal Content</label>
                                <div class="form-group col-md-8">
                                    <textarea name="goal_content" rows="8" class="form-control" placeholder="Goal Content"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Publication Status</label>
                                <div class="col-md-8 radio">
                                    <label><input type="radio" checked name="published_status" value="1" />Published</label>
                                    <label><input type="radio" name="published_status" value="0" />Unublished</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-4"></label>
                                <div class="form-group col-md-8">
                                    <input type="submit" class="btn btn-success btn-block" value="Save Content" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection


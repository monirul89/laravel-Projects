@extends('admin.master')

@section('title')
    Edit Content
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Home Page Content</h4>
                </div>
                <div class="panel-body">

                    <form action="" method="POST" class="form-horizontal">

                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Vission Title</label>
                            <div class="form-group col-md-8">
                                <input type="text" value="{{$addcontent->vission_title}}" name="vission_title" placeholder="Vission Title" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Vission Content</label>
                            <div class="form-group col-md-8">
                                <textarea name="vission_content" class="form-control" id="editor">{{$addcontent->vission_content}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 radio">
                                <label><input type="radio" {{$addcontent->published_status == 1 ? 'checked' : ''}} name="published_status" />Published</label>
                                <label><input type="radio" {{$addcontent->published_status == 0 ? 'checked' : ''}} name="published_status" />Unublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4"></label>
                            <div class="form-group col-md-8">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Content" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection


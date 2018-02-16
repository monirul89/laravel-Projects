@extends('admin.master')

@section('title')
    Update Author Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Update Author
@endsection

@section('page-header')
    Update Author
@endsection

@section('page-contents')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary"  style="font-size: 25px; font-weight: bolder;">Update Author Information</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    <form action="{{ route('save-author') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Author Name</label>
                            <div class="form-group col-md-8">
                                <input type="text" value="{{ $author->author_name  }}" name="author_name" class="form-control" />
                                <input type="hidden" value="{{ $author->id  }}"  name="author_id" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Author Bio</label>
                            <div class="form-group col-md-8">
                                <textarea class="form-control" name="author_bio" rows="6">{{ $author->author_bio  }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="form-group col-md-8">
                                <label> <input type="radio" name="publication_status" value="1" {{ $author->publication_status == 1 ? 'checked' : ' ' }} />Published</label> &nbsp;&nbsp;
                                <label> <input type="radio" name="publication_status" value="0" {{ $author->publication_status == 0 ? 'checked' : ' ' }} />Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-info btn-block" value="UPDATE AUTHOR DETAILS" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
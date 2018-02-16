@extends('admin.master')

@section('title')
    Edit Category Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Edit Category
@endsection

@section('page-header')
    Edit Category
@endsection

@section('page-contents')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">Edit Category Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center" style="margin-bottom: 10px;"> {{ Session::get('message') }} </h5>
                    <form action="{{route('update-category')}}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="form-group col-md-8">
                                <input type="text" value="{{ $category->category_name  }}" name="category_name" class="form-control" />
                                <input type="hidden" value="{{ $category->id  }}"  name="category_id" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Category Description</label>
                            <div class="form-group col-md-8">
                                <textarea class="form-control" name="category_description" rows="4">{{ $category->category_description  }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="form-group col-md-8">
                                <label> <input type="radio" name="publication_status" value="1" {{ $category->publication_status == 1 ? 'checked' : ' ' }} />Published</label> &nbsp;&nbsp;
                                <label> <input type="radio" name="publication_status" value="0" {{ $category->publication_status == 0 ? 'checked' : ' ' }} />Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-info btn-block" value="UPDATE CATEGORY INFO" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('admin.master')

@section('title')
    Add Category Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Add Category
@endsection

@section('page-header')
    Add Category
@endsection

@section('page-contents')

    <div class="container">
        <div class="col-md-10  col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">Add Category Information</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    <form action="{{route('add-new-category')}}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="form-group col-md-8" >
                                <input type="text" name="category_name" class="form-control" placeholder="Category Name" style="background-color: #F1F4F7;" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Category Description</label>
                            <div class="form-group col-md-8">
                                <textarea class="form-control" name="category_description" rows="6" style="background-color: #F1F4F7;"></textarea>
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
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="SAVE CATEGORY INFO" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
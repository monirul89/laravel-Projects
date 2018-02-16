@extends('admin.master')

@section('title')
    Add Quote Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Add Quote
@endsection

@section('page-header')
    Add Quote
@endsection

@section('page-contents')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">Add Quote Form</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center mb-4"> {{ Session::get('message') }} </h5>
                    {{ Form::open(['route'=>'save-new-quote', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Category Name</label>
                        <div class="form-group col-md-8">
                            <select name="category_id" class="form-control" >
                                <option>--Select Category Name--</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Author Name</label>
                        <div class="form-group col-md-8">
                            <select name="author_id" class="form-control" >
                                <option>--Select Author Name--</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->author_name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Quote Title</label>
                        <div class="form-group col-md-8">
                            <input type="text" name="quote_title" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Quote Description</label>
                        <div class="form-group col-md-8">
                            <textarea id="editor" class="form-control" name="quote_description" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Quote Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="quote_image" accept="image/*" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="form-group col-md-8">
                            <label> <input type="radio" name="publication_status" checked value="1" />Published</label> &nbsp;&nbsp;
                            <label> <input type="radio" name="publication_status" value="0" />Unpublished</label>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="SAVE QUOTE" />
                        </div>
                    </div>

                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
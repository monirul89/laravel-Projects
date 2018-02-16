@extends('admin.master')

@section('title')
    Modify Quotes Panel | Influencing Quotes
@endsection

@section('breadcrumb')
    Modify Quotes
@endsection

@section('page-header')
    Modify Quotes
@endsection

@section('page-contents')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary" style="font-size: 25px; font-weight: bolder;">Modify Quote</h4>
                </div>
                <div class="panel-body">
                    <h5 class="text-success text-center" style="margin-bottom: 10px;"> {{ Session::get('message') }} </h5>
                    <h5 style="margin-left:20px;"><a href="{{route('back')}}">Cancel</a></h5><br/> <br/>
                    {{ Form::open(['route'=>'modify-quote', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Category Name</label>
                        <div class="form-group col-md-8">
                            <select name="category_id" class="form-control" >
                                <option>--Select Category Name--</option>
                                    <option value=" {{$category->id}}">{{ $category->category_name }}</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Author Name</label>
                        <div class="form-group col-md-8">
                            <select name="author_id" class="form-control" >
                                <option>--Select Author Name--</option>
                                    <option value="{{ $author->id }}">{{ $author->author_name }}</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Quote Title</label>
                        <div class="form-group col-md-8">
                            <input type="text" value="{{ $blog->quote_title  }}" name="quote_title" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Quote Description</label>
                        <div class="form-group col-md-8">
                            <textarea id="editor" class="form-control" name="quote_description" rows="6"> {{ $blog->quote_description  }}"</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Quote Image</label>

                        <div class="form-group col-md-8">
                            <input type="file" name="quote_image" accept="image/*" class="form-control" />
                            <br/>
                            <img src="{{ asset($blog->quote_image)  }}" alt="" width="300" height="300" style="margin-left: 200px;">
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
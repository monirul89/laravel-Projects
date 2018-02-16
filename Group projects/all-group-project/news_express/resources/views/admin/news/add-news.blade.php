@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add News Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <br/>
                    {{ Form::open(['route'=>'save-news', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">News Title</label>
                        <div class="col-md-8">
                            <input type="text" name="news_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('news_title') ? $errors->first('news_title') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Category Name</label>
                        <div class="col-md-8">
                            <select name="category_id" class="form-control">
                                <option value=" ">--- Select Category Name ---</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id', 'Select category name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Sub Category Name</label>
                        <div class="col-md-8">
                            <select name="sub_category_id" class="form-control">
                                <option value=" ">--- Select Sub-Category Name ---</option>
                                @foreach($subCategories as $subCategory)
                                    <option value="{{$subCategory->id}}">{{ $subCategory->sub_category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('sub_category_id') ? $errors->first('sub_category_id', 'Select sub category name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="col-md-8">
                            <textarea name="short_description" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Long Description</label>
                        <div class="col-md-8">
                            <textarea id="editor" name="long_description" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Breaking News Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" name="breaking_news_status" value="1"/>Yes</label>
                            <label><input type="radio" name="breaking_news_status" checked value="0"/>No</label>
                            <br/>
                            <span class="text-danger">{{ $errors->has('breaking_news_status') ? $errors->first('breaking_news_status') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">News Image</label>
                        <div class="form-group col-md-8">
                            <input type="file" name="news_image" accept="image/*" class="form-control" />
                            <span class="text-danger">{{ $errors->has('news_image') ? $errors->first('news_image') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" value="1"/>Published</label>
                            <label><input type="radio" name="publication_status" value="0"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save News Info"/>
                        </div>
                    </div>
                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
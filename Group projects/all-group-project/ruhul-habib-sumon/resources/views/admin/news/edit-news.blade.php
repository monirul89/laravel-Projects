@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit News</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success" align="center">{{Session::get('message')}}</h3>
                    <br>
                    {{--<form action="{{route('update-news')}}" method="post" class="form-horizontal" enctype="multipart/form-data">--}}
                    {{Form::open(['route'=>'update-news','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data', 'name'=>'updateNewaForm'])}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4">News Category</label>
                            <div class="col-md-8">
                                <select class="form-control" name="category_id">
                                    <option value="">---select category----</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Sub News Category</label>
                            <div class="col-md-8">
                                <select class="form-control" name="sub_category_id">
                                    <option value="">---select sub category----</option>
                                    @foreach($subCategories as $subCategory)
                                        <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">News Title</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{ $newses->news_title}}" name="news_title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Short Description</label>
                            <div class="col-md-8">
                                <textarea name="short_description" class="form-control">{{$newses->short_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Long Description</label>
                            <div class="col-md-8">
                                <textarea name="long_description" id="editor" class="form-control">{{$newses->long_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">News Image</label>
                            <div class="col-md-8">
                                <input type="file" name="news_image" accept="image/*"/>
                                <img src="{{asset($newses->news_image)}}" alt="" height="80" width="100" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 radio">
                                <label><input type="radio" checked name="publication_status" value="1" {{$newses->publication_status == 1 ? 'checked':''}}/>Published</label>
                                <label><input type="radio" name="publication_status" value="0" {{$newses->publication_status == 0 ? 'checked':''}}/>Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update News Info"/>
                            </div>
                        </div>
                    {{--</form>--}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['updateNewaForm'].elements['category_id'].value={{$newses->category_id}}
        document.forms['updateNewaForm'].elements['sub_category_id'].value={{$newses->sub_category_id}}
    </script>
@endsection
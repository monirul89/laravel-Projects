@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Sub-Category Form</h4>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route'=>'update-sub-category', 'method'=>'POST', 'name'=>'editSubCategoryForm', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Sub Category Name</label>
                        <div class="col-md-8">
                            <input type="text" name="sub_category_name" class="form-control" value="{{ $subCategory->sub_category_name }}"/>
                            <input type="hidden" name="sub_category_id" class="form-control" value="{{ $subCategory->id }}"/>
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
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Sub Category Description</label>
                        <div class="col-md-8">
                            <textarea name="sub_category_description" class="form-control">{{ $subCategory->sub_category_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" name="publication_status" value="1" {{$subCategory->publication_status == 1 ? 'checked':''}}/>Published</label>
                            <label><input type="radio" name="publication_status" value="0" {{$subCategory->publication_status == 0 ? 'checked':''}}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info"/>
                        </div>
                    </div>
                    {{ Form::close()  }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editSubCategoryForm'].elements['category_id'].value='{{ $subCategory->category_id }}';
    </script>
@endsection
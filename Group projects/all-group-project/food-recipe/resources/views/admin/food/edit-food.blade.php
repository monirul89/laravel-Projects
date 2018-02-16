@extends('admin.master')
@section('title')
    Add-Food
@endsection
@section('content')
    <div class="x_content">
        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
        {{Form::open(['route'=>'update-food', 'method'=> 'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'updateFoodForm'])}}
        <span class="section">Edit Food Item</span>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="category_id" id="" class="form-control col-md-7 col-xs-12">
                    <option value="">---Select Category---</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_name">Food Name</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input  type="text" id="food_name" class="form-control col-md-7 col-xs-12" value="{{$food->food_name}}" name="food_name" placeholder="Food Name">
                <input  type="hidden" class="form-control col-md-7 col-xs-12" value="{{$food->id}}" name="food_id" placeholder="Food Name">
                <span class="text-danger">{{$errors->has('food_name') ? $errors->first('food_name') : ' '}}</span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="food_price">Food Price <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="food_price" name="food_price" value="{{$food->food_price}}" placeholder="Food Price" class="form-control col-md-7 col-xs-12">
                <span class="text-danger">{{$errors->has('food_price') ? $errors->first('food_price') : ' '}}</span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="food_quantity">Food Quantity <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="food_quantity" name="food_quantity" value="{{$food->food_quantity}}" placeholder="Food Quantity" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_description">Food Description</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="food_description" name="food_description" class="form-control col-md-7 col-xs-12" placeholder="Food Description">{!! $food->food_description !!}</textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_image">Food Image</label>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <input id="food_image" type="file" name="food_image" class="form-control" accept="image/*"/>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="{{asset($food->food_image)}}" class="img-responsive" alt="Product Image" >
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_image">Publication Status</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="radio">
                    <label><input type="radio" class="flat" name="publication_status" value="1" {{$food->publication_status==1?'checked':''}}> Published</label>
                    <label><input type="radio" class="flat" name="publication_status" value="0" {{$food->publication_status==0?'checked':''}}> Unpublished</label>
                </div>
            </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Update Food Item</button>
                <button type="submit" class="btn btn-primary">Cancel</button>
            </div>
        </div>
        {{Form::close()}}
    </div>
    <script>
        document.forms['updateFoodForm'].elements['category_id'].value={{$food->category_id}}
    </script>
@endsection
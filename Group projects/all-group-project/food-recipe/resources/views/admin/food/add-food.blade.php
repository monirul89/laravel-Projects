@extends('admin.master')
@section('title')
    Add-Food
@endsection
@section('content')
    <div class="x_content">
        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
        {{Form::open(['route'=>'new-food', 'method'=> 'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])}}
            <span class="section">Add Food Item</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="category_id" id="" class="form-control col-md-7 col-xs-12">
                        <option value="">---Select Category---</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ' '}}</span>
                </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_name">Food Name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input  type="text" id="food_name" class="form-control col-md-7 col-xs-12" name="food_name" placeholder="Food Name">
                        <span class="text-danger">{{$errors->has('food_name') ? $errors->first('food_name') : ' '}}</span>
                </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_price">Food Price (TK.)<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="food_price" name="food_price" placeholder="Food Price" class="form-control col-md-7 col-xs-12">
                        <span class="text-danger">{{$errors->has('food_price') ? $errors->first('food_price') : ' '}}</span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_quantity">Food Quantity <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="food_quantity" name="food_quantity" placeholder="Food Quantity" class="form-control col-md-7 col-xs-12">
                        <span class="text-danger">{{$errors->has('food_quantity') ? $errors->first('food_quantity') : ' '}}</span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_description">Food Description</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="food_description" name="food_description" class="form-control col-md-7 col-xs-12 textarea" placeholder="Food Description"></textarea>
                        <span class="text-danger">{{$errors->has('food_description') ? $errors->first('food_description') : ' '}}</span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_image">Food Image</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="food_image" type="file" name="food_image" class="form-control" accept="image/*"/>
                        <span class="text-danger">{{$errors->has('food_image') ? $errors->first('food_image') : ' '}}</span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Publication Status</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="radio">
                        <label><input type="radio" checked class="flat" name="publication_status" value="1"> Published</label>
                        <label><input type="radio" class="flat" name="publication_status" value="0"> Unpublished</label>
                        </div>
                    </div>
                </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <button id="send" type="submit" class="btn btn-success">Add Food Item</button>
                    <button type="submit" class="btn btn-primary">Cancel</button>
                </div>
            </div>
        {{Form::close()}}
    </div>
@endsection
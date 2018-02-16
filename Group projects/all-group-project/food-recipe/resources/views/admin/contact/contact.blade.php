@extends('admin.master')
@section('title')
    Contact
@endsection
@section('content')
    <div class="x_content">
        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
        {{Form::open(['route'=>'update-contact', 'method'=> 'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])}}
        <span class="section">Contact Us Page</span>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="address" name="address" class="form-control col-md-7 col-xs-12 textarea" placeholder="Address">{!! $contact->address !!}</textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone1">Telephone No</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input  type="text" id="phone1" class="form-control col-md-7 col-xs-12" name="phone1" value="{{$contact->phone1}}" placeholder="Telephone No">
                <input  type="hidden"class="form-control col-md-7 col-xs-12" name="contact_id" value="{{$contact->id}}">
                <span class="text-danger">{{$errors->has('phone1') ? $errors->first('phone1') : ' '}}</span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone2">Mobile</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input  type="text" id="phone2" class="form-control col-md-7 col-xs-12" name="phone2" value="{{$contact->phone2}}" placeholder="Phone No">
                <span class="text-danger">{{$errors->has('phone2') ? $errors->first('phone2') : ' '}}</span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone2">Email</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input  type="email" id="email" class="form-control col-md-7 col-xs-12" name="email" value="{{$contact->email}}" placeholder="Email">
                <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Update Contact</button>
            </div>
        </div>
        {{Form::close()}}
    </div>
@endsection
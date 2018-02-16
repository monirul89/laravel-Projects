@extends('admin.master')
@section('title')
    Add-Service
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Service <small>add service</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                    <br />
                    {{Form::open(['route'=>'new-service', 'method'=> 'POST', 'class'=>'form-horizontal'])}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Service Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="service_name" name="service_name" placeholder="Service Name" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category_description">Service Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea class="form-control" name="service_description" placeholder="Service Description"  id="srrvice_description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Publication Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 radio">
                            <label><input type="radio" checked class="flat" name="publication_status" value="1"> Published</label>
                            <label><input type="radio" class="flat" name="publication_status" value="0"> Unpublished</label>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Save Service Info</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button class="btn btn-primary" type="button">Cancel</button>

                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
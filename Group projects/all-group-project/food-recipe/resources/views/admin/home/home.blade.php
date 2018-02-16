@extends('admin.master')
@section('title')
    Food Recipe Dashboard
@endsection
@section('content')
    <div class="row tile_count">
        <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
            <span class="count_top"><h1><i class="fa fa-paperclip"></i> Total Categories</h1></span>

            <div class="count text-center"><i class="green">{{$totalCategories}}</i></div>
        </div>
        <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
            <span class="count_top"><h1><i class="fa fa-cutlery"></i> Total Food Item</h1></span>

            <div class="count text-center"><i class="green">{{$totalFoodItem}}</i></div>
        </div>
        <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
            <span class="count_top"><h1><i class="fa fa-warning"></i> Total Notification</h1></span>

            <div class="count text-center"><i class="green">0</i></div>
        </div>

    </div>
    <!-- /top tiles -->

@endsection
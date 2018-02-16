@extends('front-end.master')
@section('title')
    Gallery | Food Recipe
@endsection
@section('content')
    <!-- gallery -->
    <div id="gallery" class="gallery_main">
        <div class="container">
            <h2 class="heading">Our <span>Food</span></h2>
            <p class="heading">Our Food recipes</p>
            <div class="w3l_gallery_grids">
                <ul class="w3l_gallery_grid gallery" id="lightGallery">
                    @foreach($foods as $food)
                    <li data-title="{{$food->food_name}}" data-desc="{!! $food->food_description !!}" data-src="{{asset($food->food_image)}}" data-responsive-src="{{asset($food->food_image)}}">
                        <div class="w3_w3l_gallery_grid box">
                            <a href="#">
                                <img src="{{asset($food->food_image)}}" alt=" " class="img-responsive" />
                                <div class="caption scale-caption">
                                    <h3>{{$food->food_name}}</h3>
                                    <p>Tk. {!! $food->food_price !!}</p>
                                    <p>{!! $food->food_description !!}</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#lightGallery").lightGallery({
                mode:"fade",
                speed:800,
                caption:true,
                desc:true,
                mobileSrc:true
            });
        });
    </script>
@endsection
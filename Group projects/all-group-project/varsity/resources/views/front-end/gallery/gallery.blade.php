@extends('front-end.master')

@section('title')
    Gallery
@endsection

@section('banner')
    <section id="imgBanner">
        <h2>Gallery</h2>
    </section>
@endsection

@section('body')
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="gallerySLide" class="gallery_area">
                        @foreach($galleries as $gallery)
                        <a href="{{ asset($gallery->gallery_image) }}" title="{{ $gallery->gallery_title }}">
                            <img class="gallery_img" src="{{ asset($gallery->gallery_image) }}" alt="img" />
                            <span class="view_btn">View</span>
                        </a>
                        @endforeach
                    </div>
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
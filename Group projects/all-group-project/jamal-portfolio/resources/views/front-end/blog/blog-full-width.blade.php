@extends('front-end.master')

@section('title')
    Blog Full Width || Jamal's Portfolio
@endsection

@section('body')


    <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Full width blog</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('/')}}">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================
    =            Full Width Blog            =
    ======================================-->
    <section id="blog-full-width">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                        <div class="blog-post-image">
                            <a href="post-fullwidth.html"><img class="img-responsive" src="{{asset('/')}}front/images/blog/post-1.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h2 class="blogpost-title">
                                <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                            </h2>
                            <div class="blog-meta">
                                <span>Dec 11, 2020</span>
                                <span>by <a href="">Admin</a></span>
                                <span><a href="">business</a>,<a href="">people</a></span>
                            </div>
                            <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                            </p>
                            <a href="{{route('post')}}" class="btn btn-dafault btn-details">Continue Reading</a>
                        </div>

                    </article>
                    <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                        <div class="blog-post-image">
                            <a href="post-fullwidth.html"><img class="img-responsive" src="{{asset('/')}}front/images/blog/post-2.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h2 class="blogpost-title">
                                <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                            </h2>
                            <div class="blog-meta">
                                <span>Dec 11, 2020</span>
                                <span>by <a href="">Admin</a></span>
                                <span><a href="">business</a>,<a href="">people</a></span>
                            </div>
                            <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                            </p>
                            <a href="{{route('post')}}" class="btn btn-dafault btn-details">Continue Reading</a>
                        </div>

                    </article>
                    <article class="wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">
                        <div class="blog-post-image">
                            <a href="post-fullwidth.html"><img class="img-responsive" src="{{asset('/')}}front/images/blog/post-3.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h2 class="blogpost-title">
                                <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                            </h2>
                            <div class="blog-meta">
                                <span>Dec 11, 2020</span>
                                <span>by <a href="">Admin</a></span>
                                <span><a href="">business</a>,<a href="">people</a></span>
                            </div>
                            <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                            </p>
                            <a href="{{route('post')}}" class="btn btn-dafault btn-details">Continue Reading</a>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>



@endsection
@extends('front-end.master')

@section('title')
    News
@endsection

@section('body')
    <div class="col-md-8 content-left">
        <div class="articles sports">
            <header>
                <h3 class="title-head"></h3>
            </header>
            @foreach($newses as $news)
            <div class="article">
                <div class="article-left">
                    <a href="{{ route('single-view', ['id'=>$news->id]) }}"><img src="{{ asset($news->news_image) }}"></a>
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <p>{{ $news->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>104 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>52</a></p>
                        <a class="title" href="{{ route('single-view', ['id'=>$news->id]) }}"> {{ $news->news_title }}</a>
                    </div>
                    <div class="article-text">
                        <p>{{ $news->short_description }}</p>
                        <a href="{{ route('single-view', ['id'=>$news->id]) }}"><img src="{{ asset('/') }}front/images/more.png" alt="" /></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            @endforeach
        </div>
        {{ $newses->links() }}
    </div>
@endsection
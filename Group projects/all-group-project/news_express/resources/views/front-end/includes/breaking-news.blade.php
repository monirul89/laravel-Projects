<div class="wrap">
    <div class="move-text">
        <div class="breaking_news">
            <h2>Breaking News</h2>
        </div>
        <div class="marquee">
            @foreach($news as $news)
            <div class="marquee1"><a class="breaking" href="single.html">{{ $news->news_title }}</a></div>
            @endforeach
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <script type="text/javascript" src="{{ asset('/') }}front/js/jquery.marquee.min.js"></script>
        <script>
            $('.marquee').marquee({
                duration:14000,
                pauseOnHover: true

            });

            //@ sourceURL=pen.js
        </script>
    </div>
</div>
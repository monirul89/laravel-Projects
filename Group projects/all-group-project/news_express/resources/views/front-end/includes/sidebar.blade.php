<div class="col-md-4 side-bar">
    <div class="first_half">
        <div class="newsletter">
            <h1 class="side-title-head">Newsletter</h1>
            <p class="sign">Sign up to receive our free newsletters!</p>
            <form>
                <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
                <input type="submit" value="submit">
            </form>
        </div>
        <div class="list_vertical">
            <section class="accordation_menu">
                <div>
                    <input id="label-1" name="lida" type="radio" checked/>
                    <label for="label-1" id="item1"><i class="ferme"> </i>Popular Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                    <div class="content" id="a1">
                        <div class="scrollbar" id="style-2">
                            <div class="force-overflow">
                                <div class="popular-post-grids">
                                    @foreach($newses as $news)
                                    <div class="popular-post-grid">
                                        <div class="post-img">
                                            <a href="{{ route('single-view', ['id'=>$news->id]) }}"><img src="{{ asset($news->news_image) }}" alt="" /></a>
                                        </div>
                                        <div class="post-text">
                                            <a class="pp-title" href="{{ route('single-view', ['id'=>$news->id]) }}"> {{ $news->news_title }}</a>
                                            <p>{{ $news->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="side-bar-articles">
            <div class="side-bar-article">
                <a href="{{ route('single-view', ['id'=>$news->id]) }}"><img src="{{ asset('/') }}front/images/sai.jpg" alt="" /></a>
                <div class="side-bar-article-title">
                    <a href="{{ route('single-view', ['id'=>$news->id]) }}">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                </div>
            </div>
            <div class="side-bar-article">
                <a href="{{ route('single-view', ['id'=>$news->id]) }}"><img src="{{ asset('/') }}front/images/sai.jpg" alt="" /></a>
                <div class="side-bar-article-title">
                    <a href="{{ route('single-view', ['id'=>$news->id]) }}">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                </div>
            </div>
            <div class="side-bar-article">
                <a href="{{ route('single-view', ['id'=>$news->id]) }}"><img src="{{ asset('/') }}front/images/sai.jpg" alt="" /></a>
                <div class="side-bar-article-title">
                    <a href="{{ route('single-view', ['id'=>$news->id]) }}">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                </div>
            </div>
            <div class="side-bar-article">
                <a href="{{ route('single-view', ['id'=>$news->id]) }}"><img src="{{ asset('/') }}front/images/sai.jpg" alt="" /></a>
                <div class="side-bar-article-title">
                    <a href="{{ route('single-view', ['id'=>$news->id]) }}">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                </div>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
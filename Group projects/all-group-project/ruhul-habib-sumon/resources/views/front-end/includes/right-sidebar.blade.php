<div class="col-md-3 side-bar">
        <div class="videos">
    @foreach($recentTopNews as $recentTop)
            <div class="video-grid">
                <div class="video">
                    <a href="singlepage.html"><img src="{{ $recentTop->news_image }}" alt="" width="60" height="50"/></a>
                </div>
                <div class="video-name">
                    <a href="single.html">{{ $recentTop->news_title }}</a>
                </div>
            </div>
        <div class="clearfix"></div>
    @endforeach
        </div>
    {{--<div class="videos">--}}
        {{--<div class="video-grid">--}}
            {{--<div class="video">--}}
                {{--<a href="single.html"><i class="play"></i></a>--}}
            {{--</div>--}}
            {{--<div class="video-name">--}}
                {{--<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
        {{--<div class="video-grid">--}}
            {{--<div class="video">--}}
                {{--<a href="single.html"><i class="play"></i></a>--}}
            {{--</div>--}}
            {{--<div class="video-name">--}}
                {{--<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
        {{--<div class="video-grid">--}}
            {{--<div class="video">--}}
                {{--<a href="single.html"><i class="play"></i></a>--}}
            {{--</div>--}}
            {{--<div class="video-name">--}}
                {{--<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
        {{--<div class="video-grid">--}}
            {{--<div class="video">--}}
                {{--<a href="single.html"><i class="play"></i></a>--}}
            {{--</div>--}}
            {{--<div class="video-name">--}}
                {{--<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
        {{--<a class="more1" href="single.html">More  +</a>--}}
        {{--<div class="clearfix"></div>--}}
    {{--</div>--}}
    <div class="sign_up text-center">
        <h3>Sign  Up  for    Newsletter</h3>
        <p class="sign">Sign up to receive our free newsletters!</p>
        <form>
            <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
            <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
            <input type="submit" value="submit">
        </form>
        <p class="spam">We do not spam. We value your privacy!</p>
    </div>
    <div class="clearfix"></div>
    <div class="popular">
        <div class="main-title-head">
            <h5>Bangladesh</h5>
            <h4> Newspapers </h4>
            <div class="clearfix"></div>
        </div>
        <div class="popular-news">
            <div class="popular-grid">
                <h4><a href="http://www.prothomalo.com/" target="_blank">Prothom Alo</a></h4>
                <p>One of the most widely read newspapers published in Bangladesh.  <a href="http://www.prothomalo.com/" target="_blank">Read More</a></p>
            </div>
            <div class="popular-grid">
                <h4><a href="http://www.kalerkantho.com/index.php" target="_blank">Kaler Kantho</a></h4>
                <p>Daily broadsheet newspaper headquarters in bashundhara city,  <a href="http://www.kalerkantho.com/index.php" target="_blank">Read More</a></p>
            </div>
            <div class="popular-grid">
                <h4><a href="http://www.bd-pratidin.com/" target="_blank">Bangladesh Protidin</a></h4>
                <p>Featuring latest news and information on politics, business, agriculture, and more.  <a href="http://www.bd-pratidin.com/" target="_blank">Read More</a></p>
            </div>
            <div class="popular-grid">
                <h4><a href="http://samakal.com/" target="_blank">Shamokal</a></h4>
                <p>Bangladeshi daily newspaper published in Dhaka. <a href="http://samakal.com/" target="_blank">Read More</a></p>
            </div>
            <div class="popular-grid">
                <h4><a href="http://www.dailyjanakantha.com/" target="_blank">Janakantha</a></h4>
                <p>Leading Bangla-language newspaper in Bangladesh owned by the <a href="http://www.dailyjanakantha.com/" target="_blank">Read More</a></p>
            </div>
            <a class="more" href="singlepage.html">More  +</a>
        </div>
    </div>
    <br/>
    <br/>
    <div class="popular">
        <div class="main-title-head">
            <h5>popular</h5>
            <h4> Most    read</h4>
            <div class="clearfix"></div>
        </div>
        <div class="popular-news">
            <div class="popular-grid">
                <i>Sept 24th 2011 </i>
                <p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
            </div>
            <div class="popular-grid">
                <i>Sept 24th 2011 </i>
                <p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
            </div>
            <div class="popular-grid">
                <i>Sept 24th 2011 </i>
                <p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
            </div>
            <div class="popular-grid">
                <i>Sept 24th 2011 </i>
                <p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
            </div>
            <div class="popular-grid">
                <i>Sept 24th 2011 </i>
                <p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
            </div>
            <a class="more" href="singlepage.html">More  +</a>
        </div>
    </div>
    <div class="subscribe-now">
        <div class="discount">
            <a href="#">
                <div class="save">
                    <p>Save</p>
                    <p>upto</p>
                </div>
                <div class="percent">
                    <h2>50%</h2>
                </div>
                <div class="clearfix"></div>
        </div>
        <h3 class="sn">subscribe     now</h3>
        </a>
    </div>
    <div class="clearfix"></div>
</div>
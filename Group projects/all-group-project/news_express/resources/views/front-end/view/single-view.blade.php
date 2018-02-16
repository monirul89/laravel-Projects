@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="col-md-2 share_grid">
        <h3>SHARE</h3>
        <ul>
            <li>
                <a href="#">
                    <i class="facebook"></i>
                    <div class="views">
                        <span>SHARE</span>
                        <label>180</label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="twitter"></i>
                    <div class="views">
                        <span>TWEET</span>
                        <label>355</label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="linkedin"></i>
                    <div class="views">
                        <span>SHARES</span>
                        <label>28</label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="pinterest"></i>
                    <div class="views">
                        <span>PIN</span>
                        <label>16</label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="email"></i>
                    <div class="views">
                        <span>Email</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-6 content-left single-post">
        <div class="blog-posts">
            <h3 class="post">{{ $news->news_title }}</h3>
            <br/>
            <div class="last-article">
                <img src="{{ asset($news->news_image) }}" alt="" style="width: 640px; height: 420px;"/>
                <br/>
                <br/>
                <p>{!! $news->long_description !!}</p>
                <div class="clearfix"></div>
                <!--related-posts-->
                <div class="row related-posts">
                    <h4>Articles You May Like</h4>
                    @foreach($newses as $news)
                    <div class="col-xs-6 col-md-3 related-grids">
                        <a href="{{ route('single-view', ['id'=>$news->id]) }}" class="thumbnail">
                            <img src="{{ asset($news->news_image) }}" alt="" style="width: 145px; height: 95px;"/>
                        </a>
                        <h5><a href="{{ route('single-view', ['id'=>$news->id]) }}">{{ $news->news_title }}</a></h5>
                    </div>
                    @endforeach
                </div>
                <!--//related-posts-->

                <div class="response">
                    <h4>Responses</h4>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('/') }}front/images/c1.jpg" alt=""/>
                            </a>
                            <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul>
                                <li>Sep 21, 2015</li>
                                <li><a href="{{ route('single-view', ['id'=>$news->id]) }}">Reply</a></li>
                            </ul>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('/') }}front/images/c2.jpg" alt=""/>
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>July 17, 2015</li>
                                        <li><a href="{{ route('single-view', ['id'=>$news->id]) }}">Reply</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('/') }}front/images/c3.jpg" alt=""/>
                            </a>
                            <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul>
                                <li>June 21, 2015</li>
                                <li><a href="{{ route('single-view', ['id'=>$news->id]) }}">Reply</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('/') }}front/images/c4.jpg" alt=""/>
                            </a>
                            <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul>
                                <li>Mar 28, 2015</li>
                                <li><a href="{{ route('single-view', ['id'=>$news->id]) }}">Reply</a></li>
                            </ul>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('/') }}front/images/c5.jpg" alt=""/>
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>Feb 19, 2015</li>
                                        <li><a href="{{ route('single-view', ['id'=>$news->id]) }}">Reply</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('/') }}front/images/c6.jpg" alt=""/>
                            </a>
                            <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul>
                                <li>Jan 20, 2015</li>
                                <li><a href="{{ route('single-view', ['id'=>$news->id]) }}">Reply</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="coment-form">
                    <h4>Leave your comment</h4>
                    <form>
                        <input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
                        <input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
                        <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                        <input type="submit" value="Submit Comment" >
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
@endsection

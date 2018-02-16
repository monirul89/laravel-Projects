@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')

    <header id="intro-carousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item html5-video-container active">
                <!-- HTML5 Video -->
                <video muted autoplay loop poster="{{asset('/')}}front/images/typing-on-mac.jpg" id="html5-video" class="fill">
                    <source src="{{asset('/')}}front/videos/typing-on-mac.webm" type="video/webm">
                    <source src="{{asset('/')}}front/videos/typing-on-mac.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <h1 class="animated slideInDown">I am MD. MONIRUL ISLAM</h1>
                    <h4 class="animated slideInDown" style="color: #FFFFFF">90/B(4th floor), Malibagh Chowdhury Para, D.I.T-Road.Dhaka-1219</h4>
                    <h4 class="animated slideInDown"style="color: #FFFFFF" >Mobile No 1: 01915047779</br>
                        E-mail : monirul89@gmail.com</h4>
                    <a href="#" class="btn btn-default btn-lg">MY RESUME</a>
                </div>
                <div class="html5-video-controls">
                    <a id="html5-video-volume" class="fa fa-volume-up fa-lg" href="#"></a>
                    <a id="html5-video-play" class="fa fa-pause fa-lg" href="#"></a>
                </div>
                <div class="overlay-detail"></div>
            </div><!-- /.item -->

        </div><!-- /.carousel-inner -->
        <div class="mouse"></div>
    </header>
    <section id="searvices">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center all_header all_p">
                    <h2>Destination of My Life</h2>
                    <h5></h5>
                    <p class="all_bdr"></p>
                </div>
            </div>
            <div class="row all_header">
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="about_box box_shadow wow fadeInDown animated" data-wow-delay=".2s" data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                        <h3 href="#"><img align="center" src="{{asset('/')}}front/images/img/mision.png" width="300" height="100"></h3>
                        <p>Each one of us has mission in life and it would differ from person to person. Having a mission in life is
                            very good as it would help you to stay focused and make you reach where you have been dreaming to be.</p>
                        <p>I too have a mission in my life.</p>

                        <ul>
                            <li>My mission has always been to become a successful Web Developer PHP. </li>
                            <li>We will have developed much better codeing.</li>
                            <li>We will have made huge develop advancements.</li>
                            <li>The future could hold great opportunities for many people, but I will be need to work at it.</li>
                            <li>In the future, technology will have advanced so much and so fast that many new possibilities will be
                                arise.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="about_box box_shadow wow fadeInDown animated" data-wow-delay=".2s" data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                        <h3><img src="{{asset('/')}}front/images/img/vision.png" width="300" height="100"></h3>
                        <p> My Vision of Tomorrow Tomorrow's world will be much different and also, Much better in many ways. </p>
                        <ul>
                            <li>Practice--Daily practice my class work, home work and project</li>
                            <li>Ability — growth of skills, knowledge, character</li>
                            <li>Relationships — create and cultivate them</li>
                            <li>Time — using what time you have wisely</li>
                            <li>Wealth — creating the value necessary to support goals</li>
                            <li>Experiences -- Practice project then I will have experience</li>
                            <li>Accomplishments today tomorrows update my knowledge</li>
                            <li>Contentment — being happy with my friends and my family..</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="about_box box_shadow wow fadeInDown animated" data-wow-delay=".2s" data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                        <h3><img src="{{asset('/')}}front/images/img/goal.png" width="200" height="100"></h3>
                        <p>Web Developer is highly respected in the field of information technology as almost every field is associated with
                            computers these days. The role of a software engineer becomes crucial in tapping the available
                            sources to provide the best solution for issues faced.</p>

                        <p>So I have some goal such as below.</p>
                        <ul>
                            <li>Become a better PHP Project Manager</li>
                            <li>I would like to become a Web developer PHP. I love coding.</li>
                            <li>I will seek to learn, for learning is the basis for growth.</li>
                            <li>I want to help influence the future development of the people.</li>
                            <li>I want to be driven by values and beliefs truly.</li>
                            <li>Setup a dashing developer desk.</li>
                            <li>Finally, I want to go through life with a smile on my face and a twinkle in my eye.</li>
                            <li>After praying, I want to die with faith</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- I can Do part code ends -->
    <!--
        <section id="blogPost">
            <div class="container all_paragraph">
                <div class="row">
                    <div class="col-md-12 text-center all_header all_p">
                        <h2>Blog Posts</h2>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, illo.</h5>
                        <p class="all_bdr"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-justify blog all_hover wow fadeInLeft animated" data-wow-delay=".2s" data-wow-offset="100" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <img src="{{asset('/')}}front/images/blog-1.jpg" alt="..." class="img-responsive">
                            <div class="caption all_header">
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo placeat eaque hic officiis alias laborum ullam, sint, iure, reiciendis omnis reprehenderit voluptatibus expedita. Minus perferendis aliquid molestiae soluta. Officiis alias ipsam eaque maiores sunt corporis aut aperiam, inventore sed maxime!</p>
                                <p class="text-right"><a href="#" class="" role="button">More >></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-justify all_hover wow fadeInDown animated" data-wow-delay=".4s" data-wow-offset="100" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                            <img src="{{asset('/')}}front/images/blog-2.jpg" alt="...">
                            <div class="caption all_header">
                                <h3>Web Development</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo placeat eaque hic officiis alias laborum ullam, sint, iure, reiciendis omnis reprehenderit voluptatibus expedita. Minus perferendis aliquid molestiae soluta. Officiis alias ipsam eaque maiores sunt corporis aut aperiam, inventore sed maxime!</p>
                                <p class="text-right"><a href="#" class="" role="button">More >></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-justify all_hover wow fadeInDown animated" data-wow-delay=".6s" data-wow-offset="100" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;">
                            <img src="{{asset('/')}}front/images/blog-3.jpg" alt="...">
                            <div class="caption all_header">
                                <h3>Graphic Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo placeat eaque hic officiis alias laborum ullam, sint, iure, reiciendis omnis reprehenderit voluptatibus expedita. Minus perferendis aliquid molestiae soluta. Officiis alias ipsam eaque maiores sunt corporis aut aperiam, inventore sed maxime!</p>
                                <p class="text-right"><a href="#" class="" role="button">More >></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-justify all_hover wow fadeInRight animated" data-wow-delay=".2s" data-wow-offset="100" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                            <img src="{{asset('/')}}front/images/blog-4.jpg" alt="...">
                            <div class="caption all_header">
                                <h3>SEO</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo placeat eaque hic officiis alias laborum ullam, sint, iure, reiciendis omnis reprehenderit voluptatibus expedita. Minus perferendis aliquid molestiae soluta. Officiis alias ipsam eaque maiores sunt corporis aut aperiam, inventore sed maxime!</p>
                                <p class="text-right"><a href="#" class="" role="button">More >></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp viewallbtn animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                        <h6><a class="hvr-icon-spin" href="#">View All Post</a></h6>
                    </div>
                </div>
            </div>
        </section>
-->
    <!-- Blog Post code ends -->
@endsection
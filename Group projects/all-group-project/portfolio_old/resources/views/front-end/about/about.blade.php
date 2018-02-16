@extends('front-end.master');

@section('title')
    about
@endsection;

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


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>My Story</h2>
                    <h4>A little bit about me</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-4">
                    <img class="img-responsive" src="{{asset('/')}}front/images/monir1.png" alt="" width="250"/>
                </div>
                <div class="col-md-6 col-sm-8">
                    <h3><strong>Md. Monirul Islam</strong></h3>
                    <h4>Web Designer & Developer</h4>
                    <p>Hello, I am <strong>Md. Monirul Islam</strong> from Bangladesh. I am a professional Web Designer &
                        Developer. Having 1+ years of experience in this field. I love to design & build website. I want to
                        make something better, Make something special Or Make something stronger, larger and Louder.</p>
                    <p>I am working with clients from around the world, providing responsive web design & development and
                        WordPress websites with Woo-Commerce. See my recent work and read my favorite client
                        recommandation.</p>
                    <div class="about_icon">
                        <a href="#" class="about_socile_icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="about_socile_icon"><i class="fa fa-skype"></i></a>
                        <a href="#" class="about_socile_icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="about_socile_icon"><i class="fa fa-youtube"></i></a>
                        <a href="https://github.com/coder-ruhul" target="_blank" class="about_socile_icon"><i
                                    class="fa fa-github"></i></a>
                        <ul>
                            <li>
                                <a href="http://facebook.com/ruhulcse301/" target="_blank" class="about_icon_box1"
                                   data-toggle="social_tooltip" data-placement="top" title="Facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="about_icon_box2" data-toggle="social_tooltip" data-placement="top"
                                   title="Skype"></a>
                            </li>
                            <li>
                                <a href="#" class="about_icon_box3" data-toggle="social_tooltip" data-placement="top"
                                   title="twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="about_icon_box4" data-toggle="social_tooltip" data-placement="top"
                                   title="youtube"></a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="about_icon_box5"
                                   data-toggle="social_tooltip" data-placement="top" title="Github"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <h6><a class="hvr-ripple-out" href="#Projects">My Portfolio</a></h6>
                        <h6><a class="hvr-ripple-out" href="#footer">Contact Me</a></h6>
                        <h6><a class="hvr-ripple-out" href="#">Download Resume</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About part code ends -->
    <section id="searvices">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center all_header all_p">
                    <h2>My Searvices</h2>
                    <h5>I'm confident enough to design & develop any types of website or web apps.</h5>
                    <p class="all_bdr"></p>
                </div>
            </div>
            <div class="row all_header">
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="about_box box_shadow wow fadeInDown animated" data-wow-delay=".2s" data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                        <a href="#"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></a>
                        <h3>Responsive Design</h3>
                        <p>I offer proficient Front-end coding with the use of the newest technologies and responsive web
                            design that automatically adapts to all web-enabled devices. In my portfolio, are a few of the
                            projects that I've developed. I have been working as a Web Design building a wide range of sites
                            using HTML5, CSS3, PSD2HTML, Bootstrap-4.0, JavaScript, JQuery and etc.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="about_box box_shadow wow fadeInDown animated" data-wow-delay=".4s" data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInDown;">
                        <a href="#"><i class="fa fa-connectdevelop" aria-hidden="true"></i></a>
                        <h3>Web Development</h3>
                        <p>I enjoy creating web applications in PHP on the backend side. I have been working as a Web
                            Developer building a wide range of sites using Raw PHP, PHP(OOP), MVC(Laravel /Codeigniter),
                            JavaScript, jQuery, Ajax, JSON, MySQL. At the present time, I am looking for opportunities to
                            create, develop and/or enhance websites. Having 1+ years of experience in this field.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="about_box box_shadow wow fadeInDown animated" data-wow-delay=".3s" data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                        <a href="#"><i class="fa fa-code" aria-hidden="true"></i></a>
                        <h3>Web Application</h3>
                        <p>Web Development/Application, Web Systems Administration (MySQL, PHP, Git), Database Design &
                            Query Optimization, Online Business Development, Marketing and Market Research, SEO, Dynamic
                            website, E-commerce website, Student Management Software, ERP Software, Inventory Management
                            Software, Hospital & Pharmacy Software etc.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="about_box box_shadow wow fadeInDown animated" data-wow-delay=".4" data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;">
                        <a href="#"><i class="fa fa-wordpress" aria-hidden="true"></i></a>
                        <h3>Wordpress</h3>
                        <p>I am WordPress speed optimization expert who can make your website as fast as possible, I am
                            resistant in my work until I achieve best possible results and get everybody satisfied with
                            project. Services that I provide WP Theme Customization, Theme Development, Woo-Commerce, Blog
                            Site. My goal is to work until client is satisfied with project, and even more.</p>
                    </div>
                </div>
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-md-12 text-center">-->
            <!--        <h6><a class="hvr-ripple-out" href="#">Download Resume</a></h6>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
    <!-- searvices part ends -->


    <section id="feedback">
        <div class="container text-center all_header all_p">
            <h2>Feedback</h2>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, impedit.</h5>
            <p class="all_bdr"></p>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{asset('/')}}front/images/uzzal.png" alt="">
                                        <h4>Md. Monirul Islam Uzzal(Senior Programmer)</h4>
                                        <h5>Dowla IT Indusries.</h5>
                                        <h6>House#90/b(5th Floor), Road#DIT, Malibagh Chowduri Para, Dhaka-1219.</h6>
                                        <br>
                                        <p><i class="fa fa-quote-left"></i> "It was a real pleasure working with him. His
                                            skills were as advertised and he was able to meet our aggressive deadline."</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Quote 2 -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{asset('/')}}front/images/shahalam1.png" alt="">
                                        <h4>Shah Alam (Asst manager at Outsource Experts Ltd).</h4>
                                        <h5>Former Sr. Software Engineer at Ennovision</h5>
                                        <h6>House 365/5, road 6, Baridhara DOHS, Dhaka 1206</h6>
                                        <br>
                                        <p><i class="fa fa-quote-left"></i> "Gentleman programmer - always knows what to do.
                                            Very nice to know him - even after payment still always helpful."</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Quote 3 -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{asset('/')}}front/images/showrav.png" alt="">
                                        <h4>Showrav Acharjee (Senior Programmer)</h4>
                                        <h5>Codemen Solutions Inc.</h5>
                                        <h6>House#90/b(5th Floor), Road#DIT, Malibagh Chowduri Para, Dhaka-1219.</h6>
                                        <br>
                                        <p><i class="fa fa-quote-left"></i> "He is very intelligent and flexible as well. He
                                            knows his way around the industry and his design skills are excellent."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
    <!-- Feedback part code ends -->

    <section id="IcanDo">
        <div class="container all_header all_paragraph">
            <div class="row">
                <div class="col-md-12 text-center all_header all_p">
                    <h2>What I can Do !</h2>
                    <h5>I'm confident enough to design & develop any types of website or web apps. </h5>
                    <p class="all_bdr"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail box-shadow text-justify wow fadeInLeft animated" data-wow-delay=".2s"
                         data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <img src="{{asset('/')}}front/images/web-design.jpg" alt="..." class="img-responsive pl0 pr0">
                        <div class="caption">
                            <h3> Responsive With Bootstrap</h3>
                            <p>I offer proficient Front-end coding with the use of the newest technologies and responsive
                                web design that automatically adapts to all web-enabled devices. In my portfolio, are a few
                                of the projects that I've developed. Among the countless websites on the Internet only those
                                that are speed and SEO optimized yield the desired results. In a wold with exponentially
                                growing use of mobile devices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail box-shadow text-justify wow fadeInDown animated" data-wow-delay=".2s"
                         data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                        <img src="{{asset('/')}}front/images/web-design-development.jpg" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>Dynamic website with PHP</h3>
                            <p>Responsible and very ambitious, highly dedicated to my work and on a constant quest for new,
                                innovative solutions and ideas. Iinterested in programming and a logical approach to problem
                                solving. Code perfectionist in the best sense of the word. Above all, I am a team player,
                                who developed an understanding of fair play and team spirit through participation in
                                numerous sports activities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail box-shadow text-justify wow fadeInRight animated" data-wow-delay=".2s"
                         data-wow-offset="100"
                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <img src="{{asset('/')}}front/images/web-development.jpg" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>Web Development with MVC</h3>
                            <p>Customer satisfaction and attention to detail. My main goal is providing excellent service,
                                with timely, accurate, and professional results. I excel at creating good and optimized
                                websites and web applications, with basic and up to advanced speed, mobile and SEO
                                optimization for each. Striving towards unique, modern and intuitive design helps draw users
                                in and makes it easy for them to through the website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


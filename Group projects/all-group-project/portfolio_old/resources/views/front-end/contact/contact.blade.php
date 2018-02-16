@extends('front-end.master')

@section('title')
    Contact
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

    <section id="contuct">
        <div class="container about_us">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Contact</h2>
                    <p>Here is my contact information. Also, You can send me a message through the form.</p>
                    <p class="all_bdr"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 s_icon wow fadeInLeft animated" data-nahian-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <h4>My Services</h4>
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <ul>
                        <li><a href="#"><i class="fa fa-stop"></i> Responsive Design</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> PSD to HTML Convert</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> Dynamic website</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> Web Development with PHP</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> MVC (Codeigniter/Laravel)</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> Web App Development</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> Wordpress Theme Customizing</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> WordPress Theme Development</a></li>
                        <li><a href="#"><i class="fa fa-stop"></i> Woo-Commerce Site</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 s_icon_cont wow fadeInRight animated" data-nahian-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                    <h4>contact info</h4>
                    <div class="line11"></div>
                    <div class="line22"></div>
                    <ul>
                        <li>
                            <a href="https://www.google.com.bd/maps/@23.7611763,90.3633462,3a,75y,342.24h,106.82t/data=!3m6!1e1!3m4!1sUdLVB8o27kX56gfRvaqLlQ!2e0!7i13312!8i6656?hl=en"
                               target="_blank"><i class="fa fa-map-marker"></i> Address : <span>90/b, Malibagh Chowduripara, Dhaka-1219</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-phone"></i> +880 1915 047 779</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> monirul89@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-nahian-delay=".8s"
                     style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInRight;">
                    <h4>Get Direction</h4>
                    <div class="line111"></div>
                    <div class="line222"></div>

                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.669263058506!2d90.4195204998601!3d23.75917076893428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8790228ce41%3A0x82c107410a23d95b!2s40+E+Rampura+Post+Office+Ln%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1516599880672" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <!-- /.google-map -->
                    <h6 class="wow fadeInUp viewallbtn animated" data-wow-delay=".8s"
                        style="visibility: visible; animation-delay: .8s; animation-name: fadeInUp;"><a
                                class="hvr-ripple-out" href="#" data-toggle="modal" data-target="#exampleModal">drop me a
                            line hire me <span class="glyphicon glyphicon-send"></span></a></h6>
                </div>
                <div class="col-md-3 col-sm-6 s_icon_cont wow fadeInRight animated" data-nahian-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                    <h4>Contact me</h4>
                    <div class="line1111"></div>
                    <div class="line2222"></div>

                    <form action="#" method="post" class="wow fadeInRight animated" data-nahian-delay="1s"
                          style="visibility: visible; animation-delay: 1s; animation-name: fadeInRight;">
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Please Enter your name"
                                   aria-label="name" aria-describedby="sizing-addon2" name="name">
                            <span style="color:red"> </span></div>
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2"><i
                                        class="glyphicon glyphicon-earphone"></i></span>
                            <input type="text" class="form-control" placeholder="Please Enter your phone"
                                   aria-label="Phone" aria-describedby="sizing-addon2" name="phone">
                            <span style="color:red"> </span></div>
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2"><i
                                        class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Please Enter your email"
                                   aria-label="Email" aria-describedby="sizing-addon2" name="email">
                            <span style="color:red"> </span></div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                            <textarea name="message" class="form-control"
                                      placeholder="Please Enter your message"></textarea>
                            <span style="color:red"> </span></div>
                        <a href="#">
                            <button type="submit" class="btn btn-primary">Send message <span
                                        class="glyphicon glyphicon-send"></span></button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


@extends('front-end.master')

@section('title')
    Contact || Jamal's Portfolio
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
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('/')}}">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
    ==================================================
        Contact Section Start
    ================================================== -->
    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            Feel free to message me anytime.
                        </p>
                        <div class="contact-form">
                            <form id="contact-form" method="#" action="#" role="form">

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                    <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                    <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                    <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                </div>

                                <div id="success" class="success">
                                    Thank you. The Mailman is on His Way :)
                                </div>

                                <div id="error" class="error">
                                    Sorry, don't know what happened. Try later :(
                                </div>

                                <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-area">
                        <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Me</h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            You can find me on the following location:

                        </p>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.263547745789!2d90.41279297242978!3d23.83168965228135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2sNikunja+2%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1518549900126" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row address-details">
                <div class="col-md-3">
                    <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                        <i class="ion-ios-location-outline"></i>
                        <h5>Nikunja-2, Khilkhet <br>Dhaka-1229</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                        <i class="ion-ios-location-outline"></i>
                        <h5>Nikunja-2, Khilkhet <br>Dhaka-1229</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                        <i class="ion-ios-email-outline"></i>
                        <p>mduddin514@gmail.com<br>mduddin514@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                        <i class="ion-ios-telephone-outline"></i>
                        <p>+88 01750 789636<br>+88 01750 789636</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
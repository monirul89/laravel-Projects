<!-- News letter -->
<div class="agile-form">
    <div class="container">
        <div class="col-md-4 newsletter">
            <p>Subscribe to our newsletter</p>
            <h4>For our latest updates</h4>
        </div>
        <div class="col-md-8">
            <form action="#" method="get">
                <input type="email" name="email" placeholder="Enter Your Email Address" required="">
                <input type="submit" value="">
            </form>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- News letter -->

<!-- Footer -->
<div class="footer w3ls">
    <div class="container">
        <div class="footer-main">
            <div class="footer-top">
                <div class="col-md-4 ftr-grid fg1">
                    <h3>opening timings</h3>
                    <p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Mon - friday</span> : 9am to 8pm</p>
                    <p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Saturday</span> : 9am to 5pm</p>
                    <p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Sunday</span> : 6am to 11pm</p>
                </div>
                <div class="col-md-4 ftr-grid fg2 mid-gd">

                </div>
                <div class="col-md-4 ftr-grid fg2">
                    <h3>Our Address</h3>
                    <div class="ftr-address">
                        <div class="local">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="ftr-text">
                            <p>{!! $contact->address !!}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="ftr-address">
                        <div class="local">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="ftr-text">
                            <p>{{$contact->phone1}}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="ftr-address">
                        <div class="local">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="ftr-text">
                            <p><a href="mailto:info@example.com">{{$contact->email}}</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
</div>
<div class="copyrights">
    <div class="container">
        <div class="copyright">
            <p>&copy; 2017 Food Recipe. All Rights Reserved | Develop by JSS </p>
        </div>
        <div class="social-icons">
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
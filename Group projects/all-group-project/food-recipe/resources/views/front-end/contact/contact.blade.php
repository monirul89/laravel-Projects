@extends('front-end.master')
@section('title')
    Contact | Food Recipe
@endsection
@section('content')
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <h2 class="heading">Contact <span>Us</span></h2>
            <p class="heading">Get In Touch</p>
            <div class="contact-agileinfo">
                <div class="col-md-7 contact-right">
                    <form action="{{route('/')}}" method="POST">
                        <input type="text" name="Name" placeholder="Name" required="">
                        <input type="email" class="email" name="Email" placeholder="Email" required="">
                        <input type="text" name="Phone no" placeholder="Phone" required="">
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                        <input type="submit" value="SUBMIT" >
                    </form>
                </div>
                <div class="col-md-5 contact-left">
                    <div class="address">
                        <h5>Address:</h5>
                        <p><i class="glyphicon glyphicon-home"></i>{!! $contact->address !!}</p>
                    </div>
                    <div class="address address-mdl">
                        <h5>Phones:</h5>
                        <p><i class="glyphicon glyphicon-earphone"></i>{{$contact->phone1}}</p>
                        <p><i class="glyphicon glyphicon-phone"></i>{{$contact->phone2}}</p>
                    </div>
                    <div class="address">
                        <h5>Email:</h5>
                        <p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com">{{$contact->email}}</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="agileits-w3layouts-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.894709710509!2d90.38866281432803!3d23.751133794666664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bcd681372b%3A0x5c2b8755e4327004!2sBashundhara+City+Shopping+Complex!5e0!3m2!1sen!2sbd!4v1518482657811" allowfullscreen></iframe>
    </div>
    <!-- //contact -->
@endsection
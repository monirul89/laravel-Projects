@extends('layouts.app')

@section('content')

    <body>
    <h1>Influencing Quotes</h1>
    <!-- main -->
    <div class="main">
        <!--login-profile-->

        <!--login-profile-->
        <!--signin-form-->
        {{--<div class="w3">--}}
            {{--<div class="signin-form profile">--}}
                {{--<h3>Login</h3>--}}

                {{--<div class="login-form">--}}
                    {{--<form action="#" method="post">--}}
                        {{--<input type="text" name="email" placeholder="E-mail" required="">--}}
                        {{--<input type="password" name="password" placeholder="Password" required="">--}}
                        {{--<div class="tp">--}}
                            {{--<input type="submit" value="LOGIN NOW">--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="header-social wthree">--}}
                    {{--<a href="#" class="face"><h5>Facebook</h5></a>--}}
                    {{--<a href="#" class="goog"><h5>Google+</h5></a>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
                {{--<p><a href="#"> Don't have an account?</a></p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--Sign In from end--}}

        <div class="w6">
            <div class="signin-form profile">
                <h3>Register New Account</h3>

                <div class="login-form">
                    <form action="{{ route('register') }}" method="post">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Full Name" id="name" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        <input type="text" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <input type="password" name="password" placeholder="Password" required="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                                @endif
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                        <input type="submit" value="REGISTER">
                    </form>
                </div>
                <p><a href="#"> By clicking register, I agree to your terms</a></p> <br/>
                <span><a href="{{ route('/') }}">Back to Home</a></span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>Do you have already account with us?&nbsp; &nbsp; <span><a href="{{ route('login') }}">Login Here</a></span></span>
            </div>
        </div>
        <div class="clear"></div>
        <!--//signin-form-->
    </div>
    <div class="copyright">
        <p> &copy; 2018 INFLUENCING QUOTES. ALL RIGHTS RESERVED | DEVELOPED BY <a href="http://marufrion.com" target="_blank" >Maruf Abdullah</a></p>
    </div>
    </body>


    {{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection

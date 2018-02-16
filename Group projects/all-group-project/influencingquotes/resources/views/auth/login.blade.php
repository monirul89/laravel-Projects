@extends('layouts.app')

@section('content')

    <body>
    <h1>Influencing Quotes</h1>
    <!-- main -->
    <div class="main">
        <!--login-profile-->

        <!--login-profile-->
        <!--signin-form-->
        <div class="w6">
            <div class="signin-form profile">
                <h3>Login to your Account</h3>

                <div class="login-form">
                    <form action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <input type="text" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif



                        <div class="tp">
                            <input type="submit" value="LOGIN NOW">
                        </div>
                    </form>
                </div>
                <div class="header-social wthree">
                    {{--<a href="#" class="face"><h5>Facebook</h5></a>--}}
                    {{--<a href="#" class="goog"><h5>Google+</h5></a>--}}
                    <div class="clear"></div>
                </div>
                <p><a href="{{ route('register') }}"> Don't have an account?</a></p> <br/>
                <p><a href="{{ route('/') }}"> Back to Home</a></p>
            </div>
        </div>

        <div class="clear"></div>

    </div>
    <div class="copyright">
        <p> &copy; 2018 INFLUENCING QUOTES. ALL RIGHTS RESERVED | DEVELOPED BY <a href="http://marufrion.com" target="_blank" >Maruf Abdullah</a></p>
    </div>
    </body>





{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

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

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection

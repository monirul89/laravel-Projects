<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Topwork || Login </title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('/')}}admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('/')}}admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('/')}}admin/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/css/style-responsive.css" rel="stylesheet" />

</head>

<body class="login-img3-body">

<div class="container">

        {{ Form::open(array('route' => 'login','method' => 'POST','class'=>'login-form')) }}

            <section class="panel panel-default m-n">
                <div class="panel-heading">
                    <h2 style="margin-left: 30%">Login Form</h2>
                </div>
                <div class="panel-body">
                    <div class="login-wrap">
                        <p class="login-img"><i class="icon_lock_alt"></i></p>
                        <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="icon_profile"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Username" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                        <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                            <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span>
                        </label>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-default pull-left"><span class="fa fa-user-secret"></span> Login</button>
                            <a class="btn btn-success pull-right" href="{{ route('register') }}"><span class="icon_lightbulb_alt"></span> Register</a>
                        </div>
                        <div class="pt-16 text-center">
                            <a class="btn btn-sm btn-primary"><span class="fa fa-facebook"></span> Facebook</a>
                            <a class="btn btn-sm btn-info"><span class="fa fa-twitter"></span> Twitter</a>
                            <a class="btn btn-sm btn-danger"><span class="fa fa-google"></span> Gmail</a>
                        </div>
                    </div>
                </div>
            </section>

        {{ Form::close() }}

</div>

<!-- javascripts -->
<script src="{{asset('/')}}admin/js/jquery.js"></script>
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<!--custome script for all page-->
<script src="{{asset('/')}}admin/js/scripts.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Topwork || Registration </title>

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
    {{Form::open(['route'=>'register', 'method'=>'POST', 'class'=>'login-form', 'enctype'=>'multipart/form-data'])}}

        <section class="panel panel-default m-n">
            <div class="panel-heading">
                <h2>RESGISTRATION FORM</h2>
            </div>
            <div class="panel-body">
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" class="form-control"  name="name" value="{{ old('name') }}"  placeholder="Full Name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control"   name="password"  required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control"   name="password_confirmation"  required placeholder="Confirm Password">
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                        <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span>
                    </label>
                    <div class="clearfix pt-16">
                        <a class="btn btn-primary pull-left" href="{{route('login')}}"><span class="fa fa-user-secret"></span> Login</a>

                        <button class="btn btn-success pull-right" type="submit" ><span class="icon_lightbulb_alt"></span> Register</button>

                    </div>
                </div>
            </div>
        </section>

        {{ Form::close() }}

</div>


<script src="{{asset('/')}}admin/js/jquery.js"></script>
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}admin/js/scripts.js"></script>
</body>
</html>


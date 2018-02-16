<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/asset/css/fonts.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/asset/font-awesome/css/font-awesome.min.css">

    <!-- PAGE LEVEL PLUGINS STYLES -->
    <!-- REQUIRE FOR SPEECH COMMANDS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/asset/css/plugins/gritter/jquery.gritter.css" />

    <!-- Tc core CSS -->
    <link id="qstyle" rel="stylesheet" href="{{ asset('/') }}admin/asset/css/themes/style.css">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{ asset('/') }}admin/asset/css/ie-fix.css" />
    <![endif]-->


    <!-- Add custom CSS here -->

    <!-- End custom CSS here -->

    <!--[if lt IE 9]>
    <script src="{{ asset('/') }}admin/asset/js/html5shiv.js"></script>
    <script src="{{ asset('/') }}admin/asset/js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">
<div id="wrapper">
    <!-- BEGIN MAIN PAGE CONTENT -->

    <div class="login-container">
        <h2>
             <a href="{{ route('login') }}"><center>Amar News</center></a><!-- can use your logo-->
        </h2>
        <!-- BEGIN LOGIN BOX -->
        <div id="login-box" class="login-box visible">
            <p class="bigger-110">
                <i class="fa fa-users"></i> Please Enter Your Information
            </p>

            <div class="hr hr-8 hr-double dotted"></div>

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-icon right">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-icon right">
                        <span class="fa fa-lock text-gray"></span>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="tcb">
                    <label>
                        <input type="checkbox" class="tc">
                        <span class="labels"> Remember me</span>
                    </label>
                    {{--<a href="#" class="pull-right btn btn-primary">Login<i class="fa fa-key icon-on-right"></i></a>--}}
                    <input type="submit" value="Login" class="pull-right btn btn-primary"/>
                    <div class="clearfix"></div>
                </div>

                <div class="social-or-login">
                    <span class="text-primary">Or Login Using</span>
                </div>

                <div class="space-4"></div>

                <div class="text-center">
                    <a href="#" class="btn btn-twitter btn-sm btn-circle"><i class="fa fa-twitter icon-only bigger-130"></i></a>
                    <a href="#" class="btn btn-googleplus btn-sm btn-circle"><i class="fa fa-google-plus icon-only bigger-130"></i></a>
                    <a href="https://www.facebook.com/ruhulcse301/" target="_blank" class="btn btn-facebook btn-sm btn-circle"><i class="fa fa-facebook icon-only bigger-130"></i></a>
                </div>

                <div class="footer-wrap">
							<span class="pull-left">
								<a href="#" onclick="show_box('forgot-box'); return false;"><i class="fa fa-angle-double-left"></i> Forgot password?</a>
							</span>

                    <span class="pull-right">
								<a href="#" onclick="show_box('registration-box'); return false;">Register here <i class="fa fa-angle-double-right"></i></a>
							</span>

                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
        <!-- END LOGIN BOX -->

        <!-- BEGIN FORGOT BOX -->
        <div id="forgot-box" class="login-box">
            <p class="bigger-110">
                <i class="fa fa-key"></i> Retrieve Password
            </p>

            <div class="hr hr-8 hr-double dotted"></div>

            <form method="post" action="http://qsthemes.com/demo/ekoders/admin/index.html">
                <div class="form-group">
                    <div class="input-icon right">
                        <span class="fa fa-envelope text-gray"></span>
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="help-block">Enter your email and to receive instructions</span>
                    </div>
                </div>
                <a href="#" class="pull-right btn btn-danger">Submit</a>

                <div class="clearfix"></div>

                <div class="footer-wrap">
                    <a href="#" onclick="show_box('login-box'); return false;">Back to login <i class="fa fa-angle-double-right"></i></a>
                </div>
            </form>
        </div>
        <!-- END FORGOT BOX -->

        <!-- BEGIN REGISTRATION BOX -->
        <div id="registration-box" class="login-box">
            <p class="bigger-110">
                <i class="fa fa-users"></i> New User Registration
            </p>

            <div class="hr hr-8 hr-double dotted"></div>

            <form method="post" action="http://qsthemes.com/demo/ekoders/admin/index.html">
                <div class="form-group">
                    <div class="input-icon right">
                        <span class="fa fa-user text-gray"></span>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon right">
                        <span class="fa fa-envelope text-gray"></span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon right">
                        <span class="fa fa-key text-gray"></span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon right">
                        <span class="fa fa-lock text-gray"></span>
                        <input type="password" class="form-control" placeholder="your password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon right">
                        <span class="fa fa-repeat text-gray"></span>
                        <input type="password" class="form-control" placeholder="confirm password">
                    </div>
                </div>
                <div class="tcb">
                    <label>
                        <input type="checkbox" class="tc">
                        <span class="labels"> I accept the <a href="#" data-toggle="modal" data-target="#Myterms">Terms of Servcies</a></span>
                    </label>
                </div>

                <p><a href="#" class="btn btn-success">Register<i class="fa fa-angle-double-right icon-on-right"></i></a></p>

                <div class="footer-wrap">
                    <a href="#" onclick="show_box('login-box'); return false;"><i class="fa fa-angle-double-left"></i> Back to login</a>
                </div>
            </form>
        </div>
        <!-- END REGISTRATION BOX -->
    </div>

    <!-- Modal For Terms and Conditions -->
    <div class="modal fade" id="Myterms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">I Agree</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- END MAIN PAGE CONTENT -->
</div>

<!-- core JavaScript -->
<script src="{{ asset('/') }}admin/asset/js/jquery.min.js"></script>
<script src="{{ asset('/') }}admin/asset/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}admin/asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/') }}admin/asset/js/plugins/pace/pace.min.js"></script>

<!-- PAGE LEVEL PLUGINS JS -->

<!-- Themes Core Scripts -->
<script src="{{ asset('/') }}admin/asset/js/main.js"></script>

<!-- REQUIRE FOR SPEECH COMMANDS -->
<script src="{{ asset('/') }}admin/asset/js/speech-commands.js"></script>
<script src="{{ asset('/') }}admin/asset/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- initial page level scripts for examples -->
<script type="text/javascript">
    function show_box(id) {
        jQuery('.login-box.visible').removeClass('visible');
        jQuery('#'+id).addClass('visible');
    }
</script>
</body>
</html>
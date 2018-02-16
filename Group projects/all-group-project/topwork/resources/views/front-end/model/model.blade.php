<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
    <div class="small-dialog-headline">
        <h2>Apply For This Job</h2>
    </div>

    <div class="small-dialog-content">
        <form action="#" method="get" >
            <input type="text" placeholder="Full Name" value=""/>
            <input type="text" placeholder="Email Address" value=""/>
            <textarea placeholder="Your message / cover letter sent to the employer"></textarea>

            <!-- Upload CV -->
            <div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
            <div class="clearfix"></div>

            <label class="upload-btn">
                <input type="file" multiple />
                <i class="fa fa-upload"></i> Browse
            </label>
            <span class="fake-input">No file selected</span>

            <div class="divider"></div>

            <button class="send">Send Application</button>
        </form>
    </div>

</div>



<div id="signIn-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
    <div class="small-dialog-headline">
        <h2 class="text-center">Login</h2>
    </div>

    <div class="small-dialog-content">
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

</div>





<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link href="logstyle.css" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    </head>
    <body class="page-login">
        <div class="area_login">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Login</h1>
                </div>
                <form action="dashboard.php" method="post">
                    <div class="login-form">
                        <div class="control-group">
                            <input type="email" class="login-field" placeholder="Type your email" name="loginemail" id="login-email" required>
                            <label class="login-field-icon fui-user" for="login-email"></label>
                        </div>

                        <div class="control-group">
                            <input type="password" class="login-field" value="" name="loginpass" placeholder="password" id="login-pass" required>
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary btn-large btn-block" value="login">
                        <p><a class="login-link lostpass" href="reset_pass.php">Lost password?</a>
                            <a class="login-link crateacc" href="create_acc.php">Create Account?</a></p>
                    </div>
                </form>
            </div>
        </div>        
    </body>
</html>
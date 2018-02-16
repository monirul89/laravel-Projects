
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link href="logstyle.css" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    </head>
    <body class="page-login">
        <div class="area_reset">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Your Password</h1>
                </div>
                <form action="dashboard.php" method="post">
                    <div class="login-form">

                        <div class="control-group">
                            <input type="email" class="login-field" placeholder="Your email" name="resetemail" id="login-email" required>
                            <label class="login-field-icon fui-user" for="login-email"></label>
                        </div>

                        <div class="control-group">
                            <input type="password" id="newpass" class="login-field" value="" name="newpass" placeholder="New password" id="login-pass" required>
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>

                        <input type="submit" id="reset" name="reset" class="btn btn-primary btn-large btn-block" value="Submit">
                        <p><a class="login-link lostpass" href="login.php">Login?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

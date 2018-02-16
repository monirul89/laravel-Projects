<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>msFoundation</title>
        <link href="logstyle.css" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>       

    </head>
    <body class="page-login">
        <div class="area_acc">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Create Account</h1>
                </div>
                <form action="dashboard.php" method="post">
                    <div class="login-form">

                        <div class="control-group">
                            <input type="text" class="login-field" placeholder="Type Your Name" name="accname" id="accname" required>
                            <label class="login-field-icon fui-user" for="accname"></label>
                        </div>

                        <div class="control-group">
                            <input type="email" class="login-field" placeholder="Type your email" name="accemail" id="accemail" required>
                            <label class="login-field-icon fui-user" for="accemail"></label>
                        </div>

                        <div class="control-group">
                            <input type="password" class="login-field" value="" name="accpass" placeholder="password" id="accpass" required>
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>
                        <input type="submit" id="crsubmit" name="crsubmit" class="btn btn-primary btn-large btn-block" value="Create Account">
                        <p><a class="login-link" href="login.php">Have your account?</a></p>

                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
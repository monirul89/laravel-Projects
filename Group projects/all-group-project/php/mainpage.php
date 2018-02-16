<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>msFoundation</title>
        <link href="logstyle.css" type="text/css" rel="stylesheet" />
        <link href="css/customcss.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    <body>
        <?php 
        require 'db.php';
        
        ?>
        <script>
            $(document).ready(function(){
                $('#logout').click(function(){
                   $('#logout').load('mainpage.php');
//                    $('.profile_popup').css('display', 'block');
                alert();
                });
            });
        </script>
        <div class="menu_top_area">
            <div class="profile_popup">
                <img class="close_popup" src="images/close.png" alt="Close"/>
                <div class="popup">
                    <img src="images/user-logout.png" alt="Logout" />
                    <h3>Your Name</h3>
                    <p>Description.......</p>
                    <a href="login.php">Log Out</a>
                </div>
            </div>
            <div class="container">
                <div class="logo">
                    <a href="mainpage.php"><img src="images/ms-logo1.png" />
                        <h1>Foundation</h1></a>
                </div>
                <div class="social-top">
                    <ul>
                        <li class="fa fa-facebook-square fa-2x" aria-hidden="true"><a href="#"></a></li>
                        <li class="fa fa-youtube-square fa-2x" aria-hidden="true"><a href="#"></a></li>  
                        <li class="fa fa-twitter-square fa-2x" aria-hidden="true"><a href="#"></a></li>
                        <li class="fa fa-google-plus-square fa-2x" aria-hidden="true"><a href="#"></a></li>
                        <li class="fa fa-linkedin-square fa-2x" aria-hidden="true"><a href="#"></a></li>                                       
                        <li class="fa fa-reddit-square fa-2x" aria-hidden="true"><a href="#"></a></li>             
                        <li class="fa fa-vimeo-square fa-2x" aria-hidden="true"><a href="#"></a></li>             
                        <li class="fa fa-instagram-square fa-2x" aria-hidden="true"><a href="#"></a></li>             
                    </ul>
                </div>
                <div class="login-logout">
<!--                    <a style="display: none" id="login" href="#"><img src="images/user-login.png" alt="Login" /></a>-->
                    <a style="display: block"id="logout" href=""><img src="images/user-logout.png" alt="Logout" /></a>

                </div>
            </div>
        </div>
        <?php require 'nav-menu.php'; ?>
        <?php require 'footer.php'; ?>

    </body>
</html>

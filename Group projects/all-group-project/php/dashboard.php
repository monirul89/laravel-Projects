<?php
session_start();

require 'db.php';


if (isset($_POST)) {
    if (isset($_POST['loginemail']) && isset($_POST['loginemail'])) {
        $loginemail = $_POST['loginemail'];
        $loginpass = $_POST['loginpass'];
       
        $sql = "SELECT * FROM users WHERE uemail = '$loginemail' and upass = '$loginpass'";
        $result = mysqli_query($dbconntect, $sql);
        $rows = mysqli_num_rows($result);
        
        if ($rows > 0) {
            
            require 'mainpage.php';
        } else {
            require 'login.php';
        }
    }

    if (isset($_POST['crsubmit'])) {
        $accname = $_POST['accname'];
        $accuemail = $_POST['accemail'];
        $accupass = $_POST['accpass'];

        $sql = "SELECT * FROM users WHERE uemail = '$accuemail'";
        $result = mysqli_query($dbconntect, $sql);
        $rows = mysqli_num_rows($result);
        if ($rows) {
            echo 'you alredy registaed please login';
            require 'login.php';
        } else {
            $insertd = "INSERT INTO users ( uid, uname, uemail, upass) VALUES('','$accname','$accuemail','$accupass')";
            mysqli_query($dbconntect, $insertd);
            echo 'registaed Successful';
            require 'login.php';
        }
    }
    if (isset($_POST['reset'])) {

        $resetemail = $_POST['resetemail'];
        $newpass = $_POST['newpass'];

        $sql = "SELECT * FROM users WHERE uemail = '$resetemail'";
        $result = mysqli_query($dbconntect, $sql);
        $rows = mysqli_num_rows($result);
        if (!$rows) {
            echo 'you are not registaed please Create account';
            require 'create_acc.php';
        } else {
            $update = "UPDATE users SET upass='$newpass' WHERE uemail = '$resetemail'";
            mysqli_query($dbconntect, $update);
            echo 'Please check your email account';           

            require 'login.php';
        }
    }
    
}
?>

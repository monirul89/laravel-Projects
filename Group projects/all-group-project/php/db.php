<?php

$DB = 'test_db';
$USER = 'root';
$PASS = '';
$HOST = 'localhost';

$dbconntect = mysqli_connect($HOST, $USER, $PASS, $DB);

if(!$dbconntect){
    echo 'mysql not connect'. mysqli_error($dbconntect);
}
?>


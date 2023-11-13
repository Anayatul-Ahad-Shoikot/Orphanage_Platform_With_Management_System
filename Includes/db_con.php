<?php 

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'my_db';

    $con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
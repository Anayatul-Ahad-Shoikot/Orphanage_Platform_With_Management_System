<?php 

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'test';

    $con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
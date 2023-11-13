<?php
    session_start();
    unset($_SESSION['user_name']);
    unset($_SESSION['acc_type']);

    header("Location: /Root//Landing_Page//INDEX.php");
    exit(0);
?>
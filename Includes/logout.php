<?php
    session_start();
    unset($_SESSION['acc_id']);
    unset($_SESSION['role']);
    unset($_SESSION['user_id']);
    unset($_SESSION['org_id']);
    header("Location: /Root//Landing_Page//INDEX.php");
    exit(0);
?>
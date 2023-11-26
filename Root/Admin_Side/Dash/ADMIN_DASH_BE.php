<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (!isset($_SESSION['user_name']) && !isset($_SESSION['acc_type'])) {
        $_SESSION['notify'] = "user_id not seted";
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit();
    } else {
        $user_name = $_SESSION['user_name'];
        $sql = "SELECT * FROM admin_details Where user_name = '$user_name'";
        $sql_result = mysqli_query($con, $sql);
        if (mysqli_num_rows($sql_result) == 1) {
            $row = mysqli_fetch_array($sql_result);
            $admin_id = $row['admin_id'];
            $user_name = $row['user_name'];
            $contact = $row['contact'];
            $priyority = $row['priyority'];
            $image = $row['image'];
        } 
        else {
            $_SESSION['notify'] = "data not found";
            header("Location: /Root/Login_Page/LOGIN_FORM.php");
            exit();
        }
    }
    mysqli_close($con); 
?>
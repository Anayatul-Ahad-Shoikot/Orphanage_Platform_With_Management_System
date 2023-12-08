<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (!isset($_SESSION['acc_id']) && !isset($_SESSION['role'])) {
        $_SESSION['notify'] = "user_id not seted";
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit();
    } else {
        $acc_id = $_SESSION['acc_id'];
        $sql = "SELECT * FROM admin_list Where acc_id = '$acc_id'";
        $sql_result = mysqli_query($con, $sql);
        if (mysqli_num_rows($sql_result) == 1) {
            $row = mysqli_fetch_array($sql_result);
            $admin_id = $row['admin_id'];
            $admin_name = $row['admin_name'];
            $admin_contact = $row['admin_contact'];
            $priadmin_priyorityyority = $row['admin_priyority'];
            $admin_image = $row['admin_image'];
        } 
        else {
            $_SESSION['notify'] = "data not found";
            header("Location: /Root/Login_Page/LOGIN_FORM.php");
            exit();
        }
    }
    mysqli_close($con); 
?>
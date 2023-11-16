<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (!isset($_SESSION['user_name']) && !isset($_SESSION['acc_type'])) {
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit();
    } else {
        $Name = $_SESSION['user_name'];
        $sql = "SELECT * FROM admin_details Where user_name = '$Name'";
        $sql_result = mysqli_query($con, $sql);
        if (mysqli_num_rows($sql_result) == 1) {
            $row = mysqli_fetch_array($sql_result);
            $admin_id = $row['admin_id'];
            $user_id = $row['user_id'];
            $priyority = $row['priyority'];
            $image = $row['image'];
        } 
        else {
            echo "User data not found.";
            header("Location: /Root/Login_Page/LOGIN_FORM.php");
            exit();
        }
    }
    mysqli_close($con); 
?>
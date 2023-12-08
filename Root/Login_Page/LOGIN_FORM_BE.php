<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if(isset($_POST['login_btn'])) {
        if (!empty($_POST['acc_name']) && !empty($_POST['acc_pass'])) {
            $acc_name = $_POST['acc_name'];
            $entered_acc_pass = $_POST['acc_pass'];

            $Name_Check_Query = "SELECT acc_id, acc_name, acc_pass, role FROM accounts WHERE acc_name = '$acc_name'";
            $Name_Check_Query_Result = mysqli_query($con, $Name_Check_Query);

            if(mysqli_num_rows($Name_Check_Query_Result) == 1) {
                $row = mysqli_fetch_array($Name_Check_Query_Result);
                $stored_hashed_acc_pass = $row['acc_pass'];

                if (password_verify($entered_acc_pass, $stored_hashed_acc_pass)) {
                    $_SESSION['acc_id'] = $row['acc_id'];
                    $_SESSION['role'] = $row['role'];

                    if($_SESSION['role'] == "admin") {
                        header("Location: /Root/Admin_Side/Dash/ADMIN_DASH.php");
                        exit(0);
                    } else if ($_SESSION['role'] == "org") {
                        header("Location: /Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php");
                        exit(0);
                    } else {
                        header("Location: /Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php");
                        exit(0);
                    }
                } else {
                    $_SESSION['notify'] = "Warning: Wrong password";
                    header("Location: /Root/Login_Page/LOGIN_FORM.php");
                    exit(0);
                }
            } else {
                $_SESSION['notify'] = "Warning: Username does not exist";
                header("Location: /Root/Login_Page/LOGIN_FORM.php");
                exit(0);
            }
        } else {
            $_SESSION['notify'] = "Warning: Please provide both username and password";
            header("Location: /Root/Login_Page/LOGIN_FORM.php");
            exit(0);
        }
    }
    else {
        echo "Error";
    }

    mysqli_close($con);
?>

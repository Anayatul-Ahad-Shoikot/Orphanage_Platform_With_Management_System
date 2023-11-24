<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if(isset($_POST['login_btn'])) {
        if (!empty($_POST['user_name']) && !empty($_POST['user_pass'])) {
            $name = $_POST['user_name'];
            $entered_password = $_POST['user_pass'];

            $username_check_query = "SELECT * FROM user_account WHERE user_name ='$name'";
            $username_check_run = mysqli_query($con, $username_check_query);

            if(mysqli_num_rows($username_check_run) == 1) {
                $row = mysqli_fetch_array($username_check_run);
                $stored_hashed_password = $row['user_pass'];

                if (password_verify($entered_password, $stored_hashed_password)) {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['acc_type'] = $row['acc_type'];
                    $_SESSION['user_id'] = $row['user_id'];

                    if($_SESSION['acc_type'] == "admin") {
                        header("Location: /Root/Admin_Side/Dash/ADMIN_DASH.php");
                        exit(0);
                    } else if ($_SESSION['acc_type'] == "org") {
                        header("Location: /Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php");
                        exit(0);
                    } else {
                        header("Location: /Root/Dashboards/user.php");
                        exit(0);
                    }
                } else {
                    $_SESSION['notify'] = "Wrong password";
                    header("Location: /Root/Login_Page/LOGIN_FORM.php");
                    exit(0);
                }
            } else {
                $_SESSION['notify'] = "Username does not exist";
                header("Location: /Root/Login_Page/LOGIN_FORM.php");
                exit(0);
            }
        } else {
            $_SESSION['notify'] = "Please provide both username and password";
            header("Location: /Root/Login_Page/LOGIN_FORM.php");
            exit(0);
        }
    }
    else {
        echo "Error";
    }

    mysqli_close($con);
?>

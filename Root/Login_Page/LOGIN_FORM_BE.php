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

                // Verify the entered password against the stored hashed password
                if (password_verify($entered_password, $stored_hashed_password)) {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['acc_type'] = $row['acc_type'];

                    if($_SESSION['acc_type'] == "user") {
                        header("Location: /Root/Dashboards/user.php");
                        exit(0);
                    } else {
                        header("Location: /Root/Dashboards/org.php");
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

    mysqli_close($con);
?>

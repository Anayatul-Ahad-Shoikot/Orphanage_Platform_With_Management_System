<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if(isset($_POST['signup_btn'])) {
        
        $acc_name = $_POST['acc_name'];
        $acc_email = $_POST['acc_email'];
        $acc_pass = $_POST['acc_pass'];
        $confirm_pass = $_POST['confirm_pass'];
        $role = $_POST['role'];
        $date = date("Y-m-d");

        $Name_Check_Query = "SELECT acc_name FROM accounts WHERE acc_name = '$acc_name' LIMIT 1";
        $Name_Check_Query_Result = mysqli_query($con, $Name_Check_Query);

        if (mysqli_num_rows($Name_Check_Query_Result) > 0) {
            $_SESSION['status'] = "Warning: Username Already Exists.";
            header("Location: /Root/Signup_Page/SIGNUP_FORM.php");
            exit(0);
        }

        $Email_Check_Query = "SELECT acc_email FROM accounts WHERE acc_email = '$acc_email' LIMIT 1";
        $Email_Check_Query_Result = mysqli_query($con, $Email_Check_Query);
        if (mysqli_num_rows($Email_Check_Query_Result) > 0) {
            $_SESSION['status'] = "Warning: Email Already Exists.";
            header("Location: /Root/Signup_Page/SIGNUP_FORM.php");
            exit(0);
        }

        if ($acc_pass !== $confirm_pass) {
            $_SESSION['status'] = "Warning: Password Doesn't Match";
            header("Location: /Root/Signup_Page/SIGNUP_FORM.php");
            exit(0);
        }

        $hashed_password = password_hash($acc_pass, PASSWORD_DEFAULT);

        $SignUp_Query = "INSERT INTO accounts (acc_name, acc_pass, acc_email, role, acc_join_date) VALUES ('$acc_name', '$hashed_password', '$acc_email', '$role', '$date')";
        mysqli_query($con, $SignUp_Query);
        $acc_id = mysqli_insert_id($con);
        
        if ($role == "user"){
            $SignUp_Query_1 = "INSERT INTO user_list (acc_id, user_image) VALUES ($acc_id , 'img/user.jpg')";
            if (mysqli_query($con, $SignUp_Query_1)) {
                $_SESSION['status-2'] = "SignUp Successfull! Login to continue.";
                header("Location: /Root/Login_page/LOGIN_FORM.php");
                exit(0);
            } else {
                $_SESSION['status'] = "Warning: Specific Role insertion failed.";
                header("Location: /Root/Login_page/LOGIN_FORM.php");
                exit(0);
            }
        } else {
            $SignUp_Query_2 = "INSERT INTO org_list (acc_id, org_logo) VALUES ($acc_id, 'img/user.jpg')";
            if (mysqli_query($con, $SignUp_Query_2)) {
                $_SESSION['status-2'] = "Success! Login to continue";
                header("Location: /Root/Login_page/LOGIN_FORM.php");
                exit(0);
            } else {
                $_SESSION['status'] = "Warning: Specific Role insertion failed.";
                header("Location: /Root/Login_page/LOGIN_FORM.php");
                exit(0);
            }
        }
    } 

    mysqli_close($con);
?>

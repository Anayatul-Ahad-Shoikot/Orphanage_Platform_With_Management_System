<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if(isset($_POST['signup_btn'])) {
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $pass = $_POST['user_pass'];
        $cpass = $_POST['confirm_pass'];
        $acc = $_POST['acc_type'];
        $time = date("Y-m-d H:i:s");

        // Check if the username already exists
        $username_query = "SELECT * FROM user_account WHERE user_name='$name' LIMIT 1";
        $username_query_result = mysqli_query($con, $username_query);

        if (mysqli_num_rows($username_query_result) > 0) {
            $_SESSION['status'] = "Username Already Exists";
            header("Location: /Root/Signup_Page/SIGNUP_FORM.php");
            exit(0);
        }

        // Check if the email already exists
        $email_query = "SELECT * FROM user_account WHERE user_email='$email' LIMIT 1";
        $email_query_result = mysqli_query($con, $email_query);
        if (mysqli_num_rows($email_query_result) > 0) {
            $_SESSION['status'] = "Email Already Exists";
            header("Location: /Root/Signup_Page/SIGNUP_FORM.php");
            exit(0);
        }

        // Check if passwords match
        if ($pass !== $cpass) {
            $_SESSION['status'] = "Password Doesn't Match";
            header("Location: /Root/Signup_Page/SIGNUP_FORM.php");
            exit(0);
        }

        // Hash the password
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Insert user account details
        $query1 = "INSERT INTO user_account (user_name, user_pass, user_email, acc_type, since) VALUES ('$name', '$hashed_password', '$email', '$acc', '$time')";
        
        if ($acc == "user"){
            // Insert user details
            $query2 = "INSERT INTO user_details (user_name, full_name, birthdate, user_contact, gender, NID, address, website, work_name, work_add, area, country, image_path) VALUES ('$name', '', '','','','','','','','','','','')";

            if (mysqli_query($con, $query1) && mysqli_query($con, $query2)) {
                $_SESSION['status-2'] = "Success! Login to continue";
                header("Location: /Root/Login_page/LOGIN_FORM.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($con);
            }
        } else {
            // Insert organization details
            $query3 = "INSERT INTO org_details ( org_name, user_name, description, contact_email, contact_phone, address, website, logo_path, established_date, location, mission_and_vision, reviews_testimonials , country) VALUES ('', '$name', '','','','','','','','','','','')";

            if (mysqli_query($con, $query1) && mysqli_query($con, $query3)) {
                $_SESSION['status-2'] = "Success! Login to continue";
                header("Location: /Root/Login_page/LOGIN_FORM.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
    } 

    mysqli_close($con);
?>

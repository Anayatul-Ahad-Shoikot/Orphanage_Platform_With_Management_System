<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    if (isset($_SESSION['user_id']) && isset($_SESSION['acc_type'])) {
        $id = $_SESSION['user_id'];
        $acc = $_SESSION['acc_type'];
        if (isset($_POST['submit2'])) {
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $priyority = $_POST['priyority'];
            $user_pass = $_POST['user_pass'];
            $con_pass = $_POST['con_pass'];
            $Admin_pass = $_POST['Admin_pass'];
            $image_name = $_FILES["image"]["name"];
            $image_tmp_name = $_FILES["image"]["tmp_name"];
            $image_path = "img/" . $image_name;
            move_uploaded_file($image_tmp_name, $image_path);
            $time = date("Y-m-d H:i:s");
            $acc = "admin";
            $sql = "SELECT u.user_id, u.user_pass ,d.user_id, d.priyority FROM user_account AS u LEFT JOIN admin_details AS d ON u.user_id = d.user_id WHERE (u.user_id = $id AND d.priyority = 1)";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $stored_password = $row['user_pass'];
                if ($user_pass == $con_pass){
                    if (password_verify($Admin_pass, $stored_password)) {
                        $hashed_password = password_hash($user_pass, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO user_account (user_name, user_email, user_pass, acc_type, since) VALUES (?, ?, ?, ?, ?)";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param("sssss", $user_name, $user_email, $hashed_password, $acc, $time);
                        $stmt->execute();
                        $userid = $stmt->insert_id;
                        $sql2 = "INSERT INTO admin_details (user_id , priyority, image) VALUES (?, ?, ?)";
                        $stmt2 = $con->prepare($sql2);
                        $stmt2->bind_param("iss", $userid, $priyority, $image_path);
                        if ($stmt2->execute()) {
                            echo "New record created successfully";
                            header("Location: /Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php");
                            exit();
                        } else {
                            echo "Error: " . $stmt2->error;
                        }
                        $stmt->close();
                        $stmt2->close();
                    }
                }
            } else {
                echo "Admin not found";
            }
        }
    } else {
        echo "login first";
    }

    mysqli_close($con);
?>
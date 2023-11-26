<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (isset($_SESSION['user_name']) && isset($_SESSION['acc_type'])) {
        $name = $_SESSION['user_name'];
        $acc = $_SESSION['acc_type'];

        if (isset($_POST['submit1'])) {

                if (isset($_POST['user_email']) && !empty($_POST['user_email'])) {
                    $user_email = $_POST['user_email'];
                    $SQL = "UPDATE user_account SET user_email = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $user_email, $name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])) {
                    $image_name = $_FILES["image"]["name"];
                    $image_tmp_name = $_FILES["image"]["tmp_name"];
                    $image_path = "img/" . $image_name;
                    move_uploaded_file($image_tmp_name, $image_path);
                    $SQL2="UPDATE admin_details SET image = '$image_path' WHERE user_name = '$name' LIMIT 1";
                    mysqli_query($con, $SQL2);
                }
                if (isset($_POST['contact']) && !empty($_POST['contact'])) {
                    $contact = $_POST['contact'];
                    $SQL = "UPDATE admin_details SET contact = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $contact, $name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                header("Location: /Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php");
            } else {
                echo "Error to update information";
            }
        }    
    mysqli_close($con);
?>
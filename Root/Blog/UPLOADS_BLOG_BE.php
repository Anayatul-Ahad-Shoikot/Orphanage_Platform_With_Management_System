<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if(!isset($_SESSION['acc_id']) && !isset($_SESSION['role'])){
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit();
    }   else {
            if (isset($_POST['submit'])) {
                $acc_id = $_SESSION['acc_id'];
                $post_title = $_POST['post_title'];
                $post_content = $_POST['post_content'];
                $post_category = $_POST['post_category'];
                $date = date("Y-m-d");
                $image = $_FILES["img"]["name"];
                $image_tmp = $_FILES["img"]["tmp_name"];
                $img_name = preg_replace("/[^a-zA-Z0-9]/", "", $post_title);
                $file_extension = pathinfo($image, PATHINFO_EXTENSION);
                $new_image_name = $img_name . "_" . uniqid() . "." . $file_extension;
                $image_path = "img/" . $new_image_name;
                move_uploaded_file($image_tmp, $image_path);
                $query = "INSERT INTO blog_post (acc_id, post_title, post_content, post_category, post_image, published) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($con, $query);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "isssss", $acc_id, $post_title, $post_content, $post_category, $image_path, $date);
                    if (mysqli_stmt_execute($stmt)) {
                        $post_id = mysqli_insert_id($con);
                        $query1 = "INSERT INTO blog_likes (post_id) VALUES ($post_id)";
                        if (mysqli_query($con, $query1)) {
                            if($_SESSION['role']=='user'){
                                header("Location: /Root/Home_Page/U_HOME.php");
                                exit(0);
                            }   elseif ($_SESSION['role']=='admin') {
                                header("Location: /Root/Admin_Side/website/HOME.php");
                                exit(0);
                            }   else {
                                header("Location: /Root/Home_Page/O_HOME.php");
                                exit(0);
                            }
                        }   
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            } else {
                echo "Upload Error";
            }
        }
    mysqli_close($con);
?>
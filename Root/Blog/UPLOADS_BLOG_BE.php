<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if(!isset($_SESSION['user_name']) && !isset($_SESSION['acc_type'])){
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit();
    }   else {
            if (isset($_POST['submit'])) {
                $Name = $_SESSION['user_name'];
                $title = $_POST['title'];
                $content = $_POST['content'];
                $category = $_POST['category'];
                $datee = date("Y-m-d H:i:s");
                $image = $_FILES["img"]["name"];
                $image_tmp = $_FILES["img"]["tmp_name"];
                $image_path = "img/" . $image; 
                move_uploaded_file($image_tmp, $image_path);
                $query = "INSERT INTO blog_post (title, user_name, content, category, img_path, published) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($con, $query);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "ssssss", $title, $Name, $content, $category, $image_path, $datee);
                    if (mysqli_stmt_execute($stmt)) {
                        $post_id = mysqli_insert_id($con);
                        $query2 = "INSERT INTO blog_actions (post_id, likes, comments) VALUES ('$post_id', 0, '')";
                        if (mysqli_query($con, $query2)) {
                            if($_SESSION['acc_type']=='user'){
                                header("Location: /Root/Home_Page/U_HOME.php");
                                exit(0);
                            }   elseif ($_SESSION['acc_type']=='admin') {
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
                }
            }
    mysqli_close($con);
?>
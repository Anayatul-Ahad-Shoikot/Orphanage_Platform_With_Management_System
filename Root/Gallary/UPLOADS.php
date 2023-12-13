<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['img_title'])){
        $acc_id = $_SESSION['acc_id'];
        $role = $_SESSION['role'];
        $img_title = $_POST['img_title'];
        $name = $_FILES['image']['name'];
        list($txt, $ext) = explode(".", $name);
        $image_path = time().".".$ext;
        $tmp = $_FILES['image']['tmp_name'];
        if(move_uploaded_file($tmp, 'img/'.$image_path)){
            $sql = "INSERT INTO gallery (uploader_id , img_title, img_path) VALUES ($acc_id , '$img_title', '$image_path')";
            $result = mysqli_query($con, $sql);
            if($result) {
                if($role == 'user') {
                    $_SESSION['notify'] = 'Image Uploaded successfully.';
                    header("Location: /Root/Gallary/U_GALLARY_DASH.php");
                } elseif ($role == 'org') {
                    $_SESSION['notify'] = 'Image Uploaded successfully.';
                    header("Location: /Root/Gallary/O_GALLARY_DASH.php");
                } else {
                    $_SESSION['notify'] = 'Image Uploaded successfully.';
                    header("Location: /Root/Gallary/A_GALLARY_DASH.php");
                }
            } 
            else {
                if($role == 'user') {
                    $_SESSION['status-2'] = 'image uploading failed';
                    header("Location: /Root/Gallary/U_GALLARY_DASH.php");
                } elseif ($role == 'org') {
                    $_SESSION['status-2'] = 'image uploading failed';
                    header("Location: /Root/Gallary/O_GALLARY_DASH.php");
                } else {
                    $_SESSION['status-2'] = 'image uploading failed';
                    header("Location: /Root/Gallary/A_GALLARY_DASH.php");
                }
            }
        } else {
            if($role == 'user') {
                $_SESSION['status-2'] = 'image uploading failed';
                header("Location: /Root/Gallary/U_GALLARY_DASH.php");
            } elseif ($role == 'org') {
                $_SESSION['status-2'] = 'image uploading failed';
                header("Location: /Root/Gallary/O_GALLARY_DASH.php");
            } else {
                $_SESSION['status-2'] = 'image uploading failed';
                header("Location: /Root/Gallary/A_GALLARY_DASH.php");
            }
        }
    } else {
        if($role == 'user') {
            $_SESSION['status-2'] = 'Please Select Image or Write title';
            header("Location: /Root/Gallary/U_GALLARY_DASH.php");
        } elseif ($role == 'org') {
            $_SESSION['status-2'] = 'Please Select Image or Write title';
            header("Location: /Root/Gallary/O_GALLARY_DASH.php");
        } else {
            $_SESSION['status-2'] = 'Please Select Image or Write title';
            header("Location: /Root/Gallary/A_GALLARY_DASH.php");
        }
    }

?>
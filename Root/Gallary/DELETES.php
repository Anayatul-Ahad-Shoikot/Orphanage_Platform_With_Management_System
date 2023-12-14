<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    $acc_id = $_SESSION['acc_id'];
    $role = $_SESSION['role'];

    if (isset($_POST) && !empty($_POST['img_id'])) {
        $img_id =  $_POST['img_id'];
        $stmt = $con->prepare("SELECT * FROM gallery WHERE img_id = ? AND uploader_id = ?");
        $stmt->bind_param("ii", $img_id, $acc_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $sql = "DELETE FROM gallery WHERE img_id = $img_id";
            $delete_result = $con->query($sql);
            if ($delete_result) {
                if($role == 'user') {
                    $_SESSION['success'] = 'Image deleted successfully.';
                    header("Location: /Root/Gallary/U_GALLARY_DASH.php");
                } elseif ($role == 'org') {
                    $_SESSION['success'] = 'Image deleted successfully.';
                    header("Location: /Root/Gallary/O_GALLERY_DASH.php");
                }
            } else {
                if($role == 'user') {
                    $_SESSION['error'] = 'Failed to delete image.';
                    header("Location: /Root/Gallary/U_GALLARY_DASH.php");
                } elseif ($role == 'org') {
                    $_SESSION['error'] = 'Failed to delete image.';
                    header("Location: /Root/Gallary/O_GALLERY_DASH.php");
                }
            }
        } else {
            if($role == 'user') {
                $_SESSION['error'] = 'You cannot delete this photo.';
                header("Location: /Root/Gallary/U_GALLARY_DASH.php");
            } elseif ($role == 'org') {
                $_SESSION['error'] = 'You cannot delete this photo.';
                header("Location: /Root/Gallary/O_GALLERY_DASH.php");
            }
        }
    } else {
        if($role == 'user') {
            $_SESSION['error'] = 'Invalid Request.';
            header("Location: /Root/Gallary/U_GALLARY_DASH.php");
        } elseif ($role == 'org') {
            $_SESSION['error'] = 'Invalid Request.';
            header("Location: /Root/Gallary/O_GALLERY_DASH.php");
        }
    }
?>

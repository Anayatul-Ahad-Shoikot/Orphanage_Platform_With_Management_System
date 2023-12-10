<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (isset($_SESSION['acc_id']) && isset($_SESSION['role'])) {
        $acc_id = $_SESSION['acc_id'];
        if (isset($_POST['delete'])) {
            $admin_id_to_remove = $_POST['acc_id'];
            $sql_delete_admin_list = "DELETE FROM admin_list WHERE acc_id = ?";
            $stmt_delete_admin_list = $con->prepare($sql_delete_admin_list);
            $stmt_delete_admin_list->bind_param("i", $admin_id_to_remove);
            $sql_delete_accounts = "DELETE FROM accounts WHERE acc_id = ?";
            $stmt_delete_accounts = $con->prepare($sql_delete_accounts);
            $stmt_delete_accounts->bind_param("i", $admin_id_to_remove);
            $stmt_delete_admin_list->execute();
            $stmt_delete_accounts->execute();
            if ($stmt_delete_admin_list->affected_rows > 0 && $stmt_delete_accounts->affected_rows > 0) {
                $_SESSION['notification-1'] = "Admin removed successfully";
                header("Location: /Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php");
                exit();
            } else {
                $_SESSION['notification-2'] = "Unable to remove admin";
                header("Location: /Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php");
            }
            $stmt_delete_admin_list->close();
            $stmt_delete_accounts->close();
        }
    } else {
        echo "Login first";
    }
    mysqli_close($con);
?>

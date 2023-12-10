<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if (isset($_GET['orphan_id'])) {
        $id = $_GET['orphan_id'];
        $Query = "UPDATE orphan_list SET removed_status = 1 WHERE orphan_id = $id";
        if (mysqli_query($con, $Query)){
            $_SESSION['notification-1'] = "Orphan removed successfully.";
            header("Location: /Root/Admin_Side/Dash/Orphans/ORPHAN_DASH.php");
        }
    }   else {
            $_SESSION['notification-2'] = "Failed to remove orphan.";
            header("Location: /Root/Admin_Side/Dash/Orphans/ORPHAN_DASH.php");
    }
    mysqli_close($con);
?>
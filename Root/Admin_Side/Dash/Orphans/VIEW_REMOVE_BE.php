<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if (isset($_GET['orphan_id'])) {
        $orphanId = mysqli_real_escape_string($con, $_GET['orphan_id']);
        $fetchOrphanQuery = "SELECT * FROM orphan_profiles WHERE orphan_id = '$orphanId'";
        $result = mysqli_query($con, $fetchOrphanQuery);
        mysqli_num_rows($result);
        header("Location: /Root/Admin_Side/Dash/Orphans/ORPHAN_DASH.php");
        exit(0);
    }   else {
            echo "error";
    }
    mysqli_close($con);
?>
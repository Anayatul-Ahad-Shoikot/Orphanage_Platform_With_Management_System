<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (isset($_GET['orphan_id'])) {
        $orphanId = mysqli_real_escape_string($con, $_GET['orphan_id']);
        $query = "UPDATE orphan_list SET removed_status = '0' WHERE orphan_id = '$orphanId'";
        $result = mysqli_query($con,$query);
        header('Location: /Root/Orphanage/ORPHAN_DASH.php');
        exit(0);
    } else {
        echo 'Invalid request.';
    }
    mysqli_close($con);

?>
<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if (isset($_GET['orphan_id'])) {
        $id = $_GET['orphan_id'];
        $Query = "DELETE FROM orphan_profiles WHERE orphan_id = $id";
        $result = mysqli_query($con, $Query);
        if ($result){
            header("Location: /Root/Admin_Side//Dash/Orphans/ORPHAN_DASH.php");
            exit(0);
        }
    }   else {
            echo "error";
    }
    mysqli_close($con);
?>
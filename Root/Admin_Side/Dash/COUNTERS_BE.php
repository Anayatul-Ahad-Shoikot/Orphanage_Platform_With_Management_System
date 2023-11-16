<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    
    $q1 = "SELECT COUNT(*) AS total_orphans FROM orphan_profiles";
    $r1 = mysqli_query($con, $q1);
    if ($r1 && mysqli_num_rows($r1) > 0) {
        $row = mysqli_fetch_assoc($r1);
        $totalOrphans = $row['total_orphans'];
    } else {
        echo "Failed to count total orphans.";
    }

    $q2 = "SELECT COUNT(*) AS total_orgs FROM org_details";
    $r2 = mysqli_query($con, $q2);
    if ($r2 && mysqli_num_rows($r2) > 0) {
        $row2 = mysqli_fetch_assoc($r2);
        $totalOrgs = $row2['total_orgs'];
    } else {
        echo "Failed to count total orgs.";
    }


    $q3 = "SELECT COUNT(*) AS total_users FROM user_details";
    $r3 = mysqli_query($con, $q3);
    if ($r3 && mysqli_num_rows($r3) > 0) {
        $row3 = mysqli_fetch_assoc($r3);
        $totalusers = $row3['total_users'];
    } else {
        echo "Failed to count total users.";
    }

    $q4 = "SELECT COUNT(*) AS total_admin FROM admin_details";
    $r4 = mysqli_query($con, $q4);
    if ($r4 && mysqli_num_rows($r4) > 0) {
        $row4 = mysqli_fetch_assoc($r4);
        $totaladmins = $row4['total_admin'];
    } else {
        echo "Failed to count total admins.";
    }
    
    mysqli_close($con);

?>

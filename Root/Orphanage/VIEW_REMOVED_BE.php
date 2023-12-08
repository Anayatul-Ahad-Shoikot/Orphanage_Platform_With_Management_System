<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');


    $acc_id = $_SESSION['acc_id'];
    $query1 = "SELECT org_id FROM org_list WHERE acc_id = $acc_id";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $org_id = $row1['org_id'];

    $query2 = "SELECT orphan_id, first_name, last_name, orphan_image FROM orphan_list WHERE org_id = $org_id AND removed_status = '1'";
    $result2 = mysqli_query($con, $query2);
    if (mysqli_num_rows($result2) > 0) {
        while ($row2 = mysqli_fetch_assoc($result2)) {
            echo '<div class="card">';
            echo '<div class="pb"  style="background-image: url(\'' . $row2['orphan_image'] . '\');"></div>';
            echo '<div class="info">';
            echo '<h1>' . $row2['first_name'] . '  ' . $row2['last_name'] . '</h1>';
            echo '</div>';
            echo '<div class="buttons">';
            echo '<a href="/Root/Orphanage/RESTORE_ORPHAN_BE.php?orphan_id=' . $row2['orphan_id'] . '" class="message">Restore</a>';
            echo '<a href="/Root/Orphanage/REMOVED_ORPHAN_PROFILE.php?orphan_id=' . $row2['orphan_id'] . '" class="message"> View </a>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No Orphan Records found';
    }

    mysqli_close($con);
?>
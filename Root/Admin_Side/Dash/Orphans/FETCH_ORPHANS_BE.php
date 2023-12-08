<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    $query = "SELECT * FROM orphan_list";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">';
            echo '<div class="pb"  style="background-image: url(\'../../../../Orphanage/' . $row['orphan_image'] . '\');"></div>';
            echo '<div class="info">';
            echo '<h1>' . $row['first_name'] . '  ' . $row['last_name'] . '</h1>';
            echo '</div>';
            echo '<div class="buttons">';
            echo '<a href="/Root/Admin_Side/Dash/Orphans/VIEW_REMOVE_BE.php?orphan_id=' . $row['orphan_id'] . '" class="message">Remove</a>';
            echo '<a href="/Root/Admin_Side/Dash/Orphans/VIEW_CHILD.php?orphan_id=' . $row['orphan_id'] . '" class="message"> View </a>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No Orphan Records found';
    }
    mysqli_close($con);
    
?>



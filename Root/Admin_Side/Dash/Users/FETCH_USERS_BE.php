<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $query = "SELECT user_id, user_name, user_image FROM user_list";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">';
            echo '<div class="pb"  style="background-image: url(\'../../../Dashboards/Own-Profiles/User/' . $row['user_image'] . '\');"></div>';
            echo '<div class="info">';
            echo '<h1>' . $row['user_name'] . '</h1>';
            echo '</div>';
            echo '<div class="buttons">';
            echo '<a href="/Root/Admin_Side/Dash/Users/VIEW_USER.php?orphan_id=' . $row['user_id'] . '" class="message">Remove</a>';
            echo '<a href="/Root/Admin_Side/Dash/Users/VIEW_USER.php?orphan_id=' . $row['user_id'] . '" class="message"> View </a>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No Orphan Records found';
    }
    mysqli_close($con);
?>
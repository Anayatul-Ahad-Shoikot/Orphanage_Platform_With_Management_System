<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    $acc_id = $_SESSION['acc_id'];

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query0'])) {
        $query2 = "SELECT orphan_id, first_name, last_name, orphan_image FROM orphan_list WHERE adoption_status = 1";
        $result2 = mysqli_query($con, $query2);
        if (mysqli_num_rows($result2) > 0) {
            while ($row2 = mysqli_fetch_assoc($result2)) {
                echo '<div class="card">';
                echo '<div class="pb"  style="background-image: url(\'../../Orphanage/' . $row2['orphan_image'] . '\');"></div>';
                echo '<div class="info">';
                echo '<h1>' . $row2['first_name'] . '  ' . $row2['last_name'] . '</h1>';
                echo '</div>';
                echo '<div class="buttons">';
                echo '<a href="#" class="message">Gift</a>';
                echo '<a href="/Root/D & A/Adoptions/U_ORPHAN_PROFILE.php?orphan_id=' . $row2['orphan_id'] . '" class="message"> View </a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'No Orphan Records found';
        }
    } else {
        echo 'No Orphan is available';
    }

    mysqli_close($con);
?>
<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $Name = $_SESSION['user_name'];
    $query = "SELECT * FROM removed_orphans where org_name = '$Name'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">';
            echo '<div class="pb"  style="background-image: url(\'' . $row['image_path'] . '\');"></div>';
            echo '<div class="info">';
            echo '<h1>' . $row['first_name'] . '  ' . $row['last_name'] . '</h1>';
            echo '</div>';
            echo '<div class="buttons">';
            echo '<a href="#" class="message">Restore</a>';
            echo '<a href="/Root/Orphanage/REMOVED_ORPHAN_PROFILE.php?orphan_id=' . $row['orphan_id'] . '" class="message"> View </a>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No Orphan Records found';
    }

    mysqli_close($con);
?>
<?php
include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);
    $query = "SELECT * FROM orphan_profiles 
              WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' 
              OR age LIKE '%$search%' OR address LIKE '%$search%' 
              OR gender LIKE '%$search%' OR religion LIKE '%$search%' 
              OR physical_condition LIKE '%$search%' OR education_level LIKE '%$search%'
              OR medical_history LIKE '%$search%'";

    $result = mysqli_query($con, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card">';
                echo '<div class="pb"  style="background-image: url(\'' . $row['image_path'] . '\');"></div>';
                echo '<div class="info">';
                echo '<h1>' . $row['first_name'] . '  ' . $row['last_name'] . '</h1>';
                echo '</div>';
                echo '<div class="buttons">';
                echo '<a href="/Root/Orphanage/REMOVE_ORPHAN_BE.php?orphan_id=' . $row['orphan_id'] . '" class="message">Remove</a>';
                echo '<a href="/Root/Orphanage/ORPHAN_PROFILE.php?orphan_id=' . $row['orphan_id'] . '" class="message"> View </a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'No Orphan Records found';
        }
    } else {
        echo 'Error executing the query: ' . mysqli_error($con);
    }
}

mysqli_close($con);
?>

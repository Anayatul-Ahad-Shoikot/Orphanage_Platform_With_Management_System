<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
        
        $org_id = $_GET['org_id'];
        $search = $_GET['query'];
        $role = $_SESSION['role'];

        if (!empty($search)) {
            $query = "SELECT * FROM orphan_list WHERE (first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR age LIKE '%$search%' OR gender = '$search' OR religion LIKE '%$search%' OR physical_condition LIKE '%$search%' OR education_level LIKE '%$search%' OR medical_history LIKE '%$search%') AND org_id = $org_id";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card">';
                    echo '<div class="pb"  style="background-image: url(\'../' . $row['orphan_image'] . '\');"></div>';
                    echo '<div class="info">';
                    echo '<h1>' . $row['first_name'] . '  ' . $row['last_name'] . '</h1>';
                    echo '</div>';
                    echo '<div class="buttons">';
                    if ($role == 'user'){
                        echo '<a href="/Root/D & A/Donations/U_DONATION_DASH_2.php?orphan_id=' . $row['orphan_id'] . '" class="message">Gift</a>';
                        echo '<a href="/Root/Orphanage/USER-PERSPECTIVE/U_UP_ORPHAN_PROFILE.php?orphan_id=' . $row['orphan_id'] . '" class="message"> View </a>';
                    } else {
                        echo '<a href="#?orphan_id=' . $row['orphan_id'] . '" class="message">Gift</a>';
                        echo '<a href="/Root/Orphanage/USER-PERSPECTIVE/O_UP_ORPHAN_PROFILE.php?orphan_id=' . $row['orphan_id'] . '" class="message"> View </a>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No orphan to show";
            }
        } else {
            echo "insert valid query";
        }
    } else {
        header("Location: /Root/Orphanage/USER-PERSPECTIVE/UP_ORPHAN_DASH.php");
        exit(0);
    }
    mysqli_close($con);

?>

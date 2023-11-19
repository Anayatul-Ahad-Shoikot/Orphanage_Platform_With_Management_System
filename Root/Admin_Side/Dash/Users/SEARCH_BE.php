<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
        $search = $_GET['query'];
        if (!empty($search)) {
            $query = "SELECT * FROM user_account WHERE user_name LIKE '%$search%' OR user_email  LIKE '%$search%' OR acc_type LIKE '%$search%' OR user_id  LIKE '%$search%'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>  
                    <td>' . $SI . '</td>
                    <td>' . $row['user_name'] . '</td>
                    <td>' . $row['user_pass'] . '</td>
                    <td>' . $row['user_email'] . '</td>
                    <td>' . $row['acc_type'] . '</td>
                    <td>' . $row['since'] . '</td>
                    <td><a href="#"> Edit </a><a href="#">Remove</a></td>
                    </tr>';
                }
            } else {
                echo 'No Records found';
            }
        } else {
            echo '<p>Please provide what you want to search.</p>';
        }
    }
    mysqli_close($con);

?>

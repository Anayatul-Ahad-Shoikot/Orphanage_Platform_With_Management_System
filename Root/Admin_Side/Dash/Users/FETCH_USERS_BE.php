<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $query = "SELECT * FROM user_account";
    $result = mysqli_query($con, $query);
    $SI = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $SI = $SI + 1;
            echo '<tr>  
                        <td>' . $SI . '</td>
                        <td>' . $row['user_name'] . '</td>
                        <td>' . $row['user_pass'] . '</td>
                        <td>' . $row['user_email'] . '</td>
                        <td>' . $row['acc_type'] . '</td>
                        <td>' . $row['since'] . '</td>
                  </tr>';
        }
    } else {
        echo 'No User Records found';
    }

    mysqli_close($con);
?>
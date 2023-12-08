<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

        if (isset($_GET['org_id'])) {
            $org_id = $_GET['org_id'];
            $sql = "SELECT o.org_name, o.org_location, o.org_logo, aa.role FROM org_list AS o LEFT JOIN accounts AS aa ON o.acc_id = aa.acc_id WHERE org_id = $org_id";
            $sql_result = mysqli_query($con, $sql);

            if (mysqli_num_rows($sql_result) == 1) {
                $row = mysqli_fetch_array($sql_result);
                $org_name = $row['org_name'];
                $org_location = $row['org_location'];
                $org_logo = $row['org_logo'];
                $role = $row['role'];
            } 
            else {
                echo "User data not found.";
            }
        }
    mysqli_close($con);
?>
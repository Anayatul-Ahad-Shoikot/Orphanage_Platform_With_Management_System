<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if (isset($_GET['org_id'])) {
        $id = $_GET['org_id'];

        $sql = "SELECT u.acc_id, u.acc_name, role ,u.acc_email, u.acc_join_date,
            d.org_name, d.org_description, d.org_email, d.org_phone,
            d.org_website, d.org_logo, d.established, d.org_location, d.org_vision, 
            d.org_reviews FROM org_list AS d LEFT JOIN accounts AS u 
            ON d.acc_id = u.acc_id Where d.org_id = $id";
        $sql_result = mysqli_query($con, $sql);

        if (mysqli_num_rows($sql_result) == 1) {
            $row = mysqli_fetch_array($sql_result);
            $acc_id = $row['acc_id'];
            $acc_name = $row['acc_name'];
            $acc_email = $row['acc_email'];
            $role = $row['role'];
            $acc_join_date = $row['acc_join_date'];
            $org_name = $row['org_name'];
            $org_description = $row['org_description'];
            $org_email = $row['org_email'];
            $org_phone = $row['org_phone'];
            $established = $row['established'];
            $org_website = $row['org_website'];
            $org_location = $row['org_location'];
            $org_vision = $row['org_vision'];
            $org_reviews = $row['org_reviews'];
            $org_logo = $row['org_logo'];
        } 
        else {
            echo "User data not found.";
        }
    }
    mysqli_close($con); 
?>
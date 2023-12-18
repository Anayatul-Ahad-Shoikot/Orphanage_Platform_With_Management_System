<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if (isset($_GET['user_id'])) {
        $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
        $fetchOrphanQuery = "SELECT * FROM user_list WHERE user_id = $user_id";
        $result = mysqli_query($con, $fetchOrphanQuery);
        if (mysqli_num_rows($result) == 1 ) {
            $row = mysqli_fetch_assoc($result);
            $user_name = $row['user_name'];
            $acc_id  = $row['acc_id '];
            $user_birth = $row['user_birth'];
            $user_contact = $row['user_contact'];
            $user_gender = $row['user_gender'];
            $user_NID = $row['user_NID'];
            $user_address = $row['user_address'];
            $user_website = $row['user_website'];
            $user_job = $row['user_job'];
            $user_location = $row['user_location'];
            $user_image = $row['user_image'];

            $query2 = "SELECT acc_name, acc_email, acc_join_date FROM accounts WHERE acc_id = $acc_id";
            $result2 = mysqli_query($con, $query2);
            if (mysqli_num_rows($result2) == 1 ) {
                $row2 = mysqli_fetch_assoc($result2);
                $acc_name = $row2['acc_name'];
                $acc_email = $row2['acc_email'];
                $acc_join_date = $row2['acc_join_date'];
                
            }

        }   else {
            echo 'user Id not found.';
        } 
    }   else {
            echo "error";
    }
    mysqli_close($con);
?>
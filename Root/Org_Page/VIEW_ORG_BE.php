<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    $username = $_SESSION['user_name'];
    if (isset($_GET['org_id'])) {
        $org_id = $_GET['org_id'];
        $sql = "SELECT * FROM org_details Where org_id = $org_id";
        $sql_result = mysqli_query($con, $sql);
        if (mysqli_num_rows($sql_result) > 0 ) {
            $row = mysqli_fetch_array($sql_result);
            $org_name = $row['org_name'];
            $description = $row['description'];
            $contact_email = $row['contact_email'];
            $contact_phone = $row['contact_phone'];
            $address = $row['address'];
            $established_date = $row['established_date'];
            $website = $row['website'];
            $location = $row['location'];
            $mission_and_vision = $row['mission_and_vision'];
            $reviews_testimonials = $row['reviews_testimonials'];
            $country = $row['country'];
            $logo_path = $row['logo_path'];
        } 
        else {
            echo "User data not found.";
        }
    }
    mysqli_close($con); 
?>
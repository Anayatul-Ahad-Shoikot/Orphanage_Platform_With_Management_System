<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (!isset($_SESSION['user_name']) && !isset($_SESSION['acc_type'])) {
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit();
    } else {
        $Name = $_SESSION['user_name'];
        
        $sql = "SELECT u.user_id, u.user_name, u.user_email, u.acc_type, u.since,
            d.org_id, d.org_name, d.description, d.contact_email, d.contact_phone, d.address, 
            d.website, d.logo_path, d.established_date, d.location, d.mission_and_vision, 
            d.reviews_testimonials, d.country FROM user_account AS u LEFT JOIN org_details AS d 
            ON u.user_name = d.user_name Where u.user_name = '$Name'";
        $sql_result = mysqli_query($con, $sql);

        if (mysqli_num_rows($sql_result) == 1) {
            $row = mysqli_fetch_array($sql_result);

            $user_id = $row['user_id'];
            $user_name = $row['user_name'];
            $user_email = $row['user_email'];
            $acc_type = $row['acc_type'];
            $since = $row['since'];
            $org_id = $row['org_id'];
            $org_name = $row['org_name'];
            $description = $row['description'];
            $contact_email = $row['contact_email'];
            $contact_phone = $row['contact_phone'];
            $established_date = $row['established_date'];
            $address = $row['address'];
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
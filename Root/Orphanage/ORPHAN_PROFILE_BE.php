<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (isset($_GET['orphan_id'])) {
        $orphanId = mysqli_real_escape_string($con, $_GET['orphan_id']);
        $fetchOrphanQuery = "SELECT * FROM orphan_profiles WHERE orphan_id = '$orphanId'";
        $result = mysqli_query($con, $fetchOrphanQuery);
        if (mysqli_num_rows($result) == 1 ) {
            $row = mysqli_fetch_assoc($result);
            $orphan_id = $row['orphan_id'];
            $org_id = $row['org_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $age = $row['age'];
            $address = $row['address'];
            $guardian_name = $row['guardian_name'];
            $guardian_contact = $row['guardian_contact'];
            $gender = $row['gender'];
            $religion = $row['religion'];
            $date_of_birth = $row['date_of_birth'];
            $since = $row['since'];
            $family_status = $row['family_status'];
            $physical_condition = $row['physical_condition'];
            $education_level = $row['education_level'];
            $medical_history = $row['medical_history'];
            $hobby = $row['hobby'];
            $favorite_food = $row['favorite_food'];
            $favorite_games = $row['favorite_games'];
            $skills = $row['skills'];
            $dreams = $row['dreams'];
            $problems = $row['problems'];
            $other_comments = $row['other_comments'];
            $image_path = $row['image_path'];

            $query2 = "SELECT * FROM org_details WHERE user_name = '$org_id'";
            $result2 = mysqli_query($con, $query2);
            if (mysqli_num_rows($result2) == 1 ) {
                $row2 = mysqli_fetch_assoc($result2);
                $org_name = $row2['org_name'];
                $org_address = $row2['address'];
                $phone = $row2['contact_phone'];
                
            }
        }   else {
            echo 'Orphan profile not found.';
        } 
    }   else {
            echo "error";
    }
    mysqli_close($con);
?>
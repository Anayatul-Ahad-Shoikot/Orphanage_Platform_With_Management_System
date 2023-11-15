<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    $Name = $_SESSION['user_name'];
    if (isset($_GET['orphan_id'])) {
        $orphanId = mysqli_real_escape_string($con, $_GET['orphan_id']);
        $fetchOrphanQuery = "SELECT * FROM orphan_profiles WHERE orphan_id = '$orphanId'";
        $result = mysqli_query($con, $fetchOrphanQuery);
        if ($result && $row = mysqli_fetch_assoc($result)) {
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
            $backupQuery = "INSERT INTO removed_orphans (orphan_id ,org_id, org_name ,first_name, last_name, age, address, guardian_name, guardian_contact, gender, religion, date_of_birth, since, family_status, physical_condition, education_level, medical_history, hobby, favorite_food, favorite_games, skills, dreams, problems, other_comments, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $backupResult = mysqli_prepare($con, $backupQuery);

            mysqli_stmt_bind_param($backupResult, "iisssisssssssssssssssssss", $orphan_id, $org_id, $Name, $first_name, $last_name, $age, $address, $guardian_name, $guardian_contact, $gender, $religion, $date_of_birth, $since, $family_status, $physical_condition, $education_level, $medical_history, $hobby, $favorite_food, $favorite_games, $skills, $dreams, $problems, $other_comments, $image_path);
            if (mysqli_stmt_execute($backupResult)) {
                $deleteQuery = "DELETE FROM orphan_profiles WHERE orphan_id = '$orphanId'";
                $deleteResult = mysqli_query($con, $deleteQuery);
                if ($deleteResult) {
                    header('Location: /Root/Orphanage/ORPHAN_DASH.php');
                    exit(0);
                } else {
                    echo 'Failed to delete orphan.';
                }
            } else {
                echo 'Failed to backup orphan details.';
            }
        } else {
            echo 'Orphan not found.';
        }
    } else {
        echo 'Invalid request.';
    }
    mysqli_close($con);

?>
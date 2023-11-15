<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    $user_name = $_SESSION['user_name'];
    $acc_type = $_SESSION['acc_type'];
    $query2 = "SELECT * FROM org_details WHERE user_name = '$user_name'";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_assoc($result2);
    $org_id = $row2['org_id'];
    if(isset($_SESSION['user_name']) && $acc_type == "org") {
        if (isset($_POST['Register'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $guardian_name = $_POST['guardian_name'];
            $guardian_contact = $_POST['guardian_contact'];
            $gender = $_POST['gender'];
            $religion = $_POST['religion'];
            $date_of_birth = $_POST['date_of_birth'];
            $family_status = $_POST['family_status'];
            $physical_condition = $_POST['physical_condition'];
            $education_level = $_POST['education_level'];
            $medical_history = $_POST['medical_history'];
            $hobby = $_POST['hobby'];
            $favorite_food = $_POST['favorite_food'];
            $favorite_games = $_POST['favorite_games'];
            $skills = $_POST['skills'];
            $dreams = $_POST['dreams'];
            $problems = $_POST['problems'];
            $time = date("Y-m-d");
            $other_comments = $_POST['other_comments'];
            $image_name = $_FILES["image"]["name"];
            $image_tmp_name = $_FILES["image"]["tmp_name"];
            $image_path = "img/" . $image_name;
            move_uploaded_file($image_tmp_name, $image_path);

            $query = "INSERT INTO orphan_profiles (org_id, org_name, first_name, last_name, age, address, guardian_name, guardian_contact, gender, religion, date_of_birth, since, family_status, physical_condition, education_level, medical_history, hobby, favorite_food, favorite_games, skills, dreams, problems, other_comments, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($con, $query);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isssisssssssssssssssssss", $org_id ,$user_name, $first_name, $last_name, $age, $address, $guardian_name, $guardian_contact, $gender, $religion, $date_of_birth, $time, $family_status, $physical_condition, $education_level, $medical_history, $hobby, $favorite_food, $favorite_games, $skills, $dreams, $problems, $other_comments, $image_path);
                if (mysqli_stmt_execute($stmt)) {
                    header("Location: /Root/Orphanage/ORPHAN_DASH.php");
                    exit(0);
                } else {
                    echo "Register Error L-48";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Register Error L-52";
            }
            mysqli_close($con);
        }
    }   else {
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit(0);
    }
?>
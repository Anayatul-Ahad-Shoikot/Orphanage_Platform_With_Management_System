<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    
    if (isset($_POST['update'])) {
        $child = $_POST['orphan_id'];
        if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
            $first_name = $_POST['first_name'];
            $SQL = "UPDATE orphan_profiles SET first_name = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $first_name, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['last_name']) && !empty($_POST['last_name'])) {
            $last_name = $_POST['last_name'];
            $SQL = "UPDATE orphan_profiles SET last_name = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $last_name, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['age']) && !empty($_POST['age'])) {
            $age = $_POST['age'];
            $SQL = "UPDATE orphan_profiles SET age = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "ii", $age, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

        }
        if (isset($_POST['address']) && !empty($_POST['address'])) {
            $address = $_POST['address'];
            $SQL = "UPDATE orphan_profiles SET address = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $address, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

        }
        if (isset($_POST['guardian_name']) && !empty($_POST['guardian_name'])) {
            $guardian_name = $_POST['guardian_name'];
            $SQL = "UPDATE orphan_profiles SET guardian_name = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $guardian_name, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['guardian_contact']) && !empty($_POST['guardian_contact'])) {
            $guardian_contact = $_POST['guardian_contact'];
            $SQL = "UPDATE orphan_profiles SET guardian_contact = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $guardian_contact, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['gender']) && !empty($_POST['gender'])) {
            $gender = $_POST['gender'];
            $SQL = "UPDATE orphan_profiles SET gender = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $gender, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['religion']) && !empty($_POST['religion'])) {
            $religion = $_POST['religion'];
            $SQL = "UPDATE orphan_profiles SET religion = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $religion, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['date_of_birth']) && !empty($_POST['date_of_birth'])) {
            $date_of_birth = $_POST['date_of_birth'];
            $SQL = "UPDATE orphan_profiles SET date_of_birth = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $date_of_birth, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);      
        }
        if (isset($_POST['family_status']) && !empty($_POST['family_status'])) {
            $family_status = $_POST['family_status'];
            $SQL = "UPDATE orphan_profiles SET family_status = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $family_status, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['physical_condition']) && !empty($_POST['physical_condition'])) {
            $physical_condition = $_POST['physical_condition'];
            $SQL = "UPDATE orphan_profiles SET physical_condition = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $physical_condition, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['education_level']) && !empty($_POST['education_level'])) {
            $education_level = $_POST['education_level'];
            $SQL = "UPDATE orphan_profiles SET education_level = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $education_level, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['medical_history']) && !empty($_POST['medical_history'])) {
            $medical_history = $_POST['medical_history'];
            $SQL = "UPDATE orphan_profiles SET medical_history = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $medical_history, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['hobby']) && !empty($_POST['hobby'])) {
            $hobby = $_POST['hobby'];
            $SQL = "UPDATE orphan_profiles SET hobby = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $hobby, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['favorite_food']) && !empty($_POST['favorite_food'])) {
            $favorite_food = $_POST['favorite_food'];
            $SQL = "UPDATE orphan_profiles SET favorite_food = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $favorite_food, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['favorite_games']) && !empty($_POST['favorite_games'])) {
            $favorite_games = $_POST['favorite_games'];
            $SQL = "UPDATE orphan_profiles SET favorite_games = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $favorite_games, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['skills']) && !empty($_POST['skills'])) {
            $skills = $_POST['skills'];
            $SQL = "UPDATE orphan_profiles SET skills = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $skills, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['dreams']) && !empty($_POST['dreams'])) {
            $dreams = $_POST['dreams'];
            $SQL = "UPDATE orphan_profiles SET dreams = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $dreams, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['problems']) && !empty($_POST['problems'])) {
            $problems = $_POST['problems'];
            $SQL = "UPDATE orphan_profiles SET problems = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $problems, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_POST['other_comments']) && !empty($_POST['other_comments'])) {
            $other_comments = $_POST['other_comments'];
            $SQL = "UPDATE orphan_profiles SET other_comments = ? WHERE orphan_id = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $SQL);
            mysqli_stmt_bind_param($stmt, "si", $other_comments, $child);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if (isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])) {
            $image_name = $_FILES["image"]["name"];
            $image_tmp_name = $_FILES["image"]["tmp_name"];
            $image_path = "img/" . $image_name;
            move_uploaded_file($image_tmp_name, $image_path);
            $SQL="UPDATE orphan_profiles SET image_path = '$image_path' WHERE orphan_id= $child LIMIT 1";
            mysqli_query($con, $SQL);
        }
        header("Location: /Root/Orphanage/ORPHAN_PROFILE.php?orphan_id=$child");
        } 
        
        
            else {
                echo "Error to update information";
        }
    mysqli_close($con);
?>
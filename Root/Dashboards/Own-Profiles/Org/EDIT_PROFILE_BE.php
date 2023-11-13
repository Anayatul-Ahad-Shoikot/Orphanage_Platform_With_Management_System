<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if (!isset($_SESSION['user_name']) && !isset($_SESSION['acc_type'])) {
        header("Location: /Root/Login_Page/LOGIN_FORM.php");
        exit();
    } else {
        if (isset($_POST['update'])) {
                $Name = $_SESSION['user_name'];
            
                if (isset($_POST['org_name']) && !empty($_POST['org_name'])) {
                    $org_name = $_POST['org_name'];
                    $SQL = "UPDATE org_details SET org_name = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $org_name, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_POST['contact_email']) && !empty($_POST['contact_email'])) {
                    $contact_email = $_POST['contact_email'];
                    $SQL = "UPDATE org_details SET contact_email = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $contact_email, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_POST['contact_phone']) && !empty($_POST['contact_phone'])) {
                    $contact_phone = $_POST['contact_phone'];
                    $SQL = "UPDATE org_details SET contact_phone = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $contact_phone, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);

                }
                if (isset($_POST['established_date']) && !empty($_POST['established_date'])) {
                    $established_date = $_POST['established_date'];
                    $SQL = "UPDATE org_details SET established_date = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $established_date, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);

                }
                if (isset($_POST['description']) && !empty($_POST['description'])) {
                    $description = $_POST['description'];
                    $SQL = "UPDATE org_details SET description = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $description, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_POST['website']) && !empty($_POST['website'])) {
                    $website = $_POST['website'];
                    $SQL = "UPDATE org_details SET website = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $website, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_POST['address']) && !empty($_POST['address'])) {
                    $address = $_POST['address'];
                    $SQL = "UPDATE org_details SET address = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $address, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_POST['location']) && !empty($_POST['location'])) {
                    $location = $_POST['location'];
                    $SQL = "UPDATE org_details SET location = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $location, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_POST['country']) && !empty($_POST['country'])) {
                    $country = $_POST['country'];
                    $SQL = "UPDATE org_details SET country = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $country, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);      
                }
                if (isset($_POST['mission_and_vision']) && !empty($_POST['mission_and_vision'])) {
                    $mission_and_vision = $_POST['mission_and_vision'];
                    $SQL = "UPDATE org_details SET mission_and_vision = ? WHERE user_name = ? LIMIT 1";
                    $stmt = mysqli_prepare($con, $SQL);
                    mysqli_stmt_bind_param($stmt, "ss", $mission_and_vision, $Name);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }
                if (isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])) {
                    $image_name = $_FILES["image"]["name"];
                    $image_tmp_name = $_FILES["image"]["tmp_name"];
                    $image_path = "img/" . $image_name;
                    move_uploaded_file($image_tmp_name, $image_path);
                    $SQL="UPDATE org_details SET logo_path = '$image_path' WHERE user_name='$Name' LIMIT 1";
                    mysqli_query($con, $SQL);
                }
                header("Location: /Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php");
            } else {
                echo "Error to update information";
            }
        }    
    mysqli_close($con);
?>
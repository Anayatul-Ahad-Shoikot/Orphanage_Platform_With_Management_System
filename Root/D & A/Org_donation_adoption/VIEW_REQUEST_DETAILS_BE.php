<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    
    $adoption_id = $_GET['adoption_id'];
    $user_name = $_GET['user_name'];
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];

    $query1 = "SELECT * FROM adoptions WHERE adoption_id = $adoption_id";
    $result1 = mysqli_query($con, $query1);
    if (mysqli_num_rows($result1) == 1) {
        $row1 = mysqli_fetch_assoc($result1);
            $orphan_id = $row1['orphan_id'];

    }
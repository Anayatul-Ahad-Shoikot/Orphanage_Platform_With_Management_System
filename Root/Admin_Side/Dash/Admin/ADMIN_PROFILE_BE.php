<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    if (isset($_SESSION['user_name']) && isset($_SESSION['acc_type'])) {
        $name = $_SESSION['user_name'];
        $acc = $_SESSION['acc_type'];
        $sql = "SELECT u.user_name, u.since, u.user_email, d.contact, d.user_name, d.priyority, d.image FROM user_account AS u LEFT JOIN admin_details AS d ON u.user_name = d.user_name WHERE u.user_name = '$name'";
        $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $user_name = $row['user_name'];
                $since = $row['since'];
                $user_email = $row['user_email'];
                $contact = $row['contact'];
                $priyority = $row['priyority'];
                $img = $row['image'];
            } else {
                echo "Failed to fetch data";
            }
        } else {
            echo "Error to load session";
    }
    mysqli_close($con);
?>

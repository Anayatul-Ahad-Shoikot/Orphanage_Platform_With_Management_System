<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    if (isset($_SESSION['user_id']) && isset($_SESSION['acc_type'])) {
        $id = $_SESSION['user_id'];
        $acc = $_SESSION['acc_type'];
        $sql = "SELECT u.user_id, u.user_name, u.user_pass, u.since, u.user_email, d.user_id, d.priyority, d.image FROM user_account AS u LEFT JOIN admin_details AS d ON u.user_id = d.user_id WHERE (u.user_id = $id AND u.acc_type = '$acc')";
        $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $since = $row['since'];
                $user_email = $row['user_email'];
                $priyority = $row['priyority'];
                $img = $row['image'];
            } else {
                echo "No Record Found";
            }
        } else {
            echo "Error to load session";
    }
    mysqli_close($con);
?>

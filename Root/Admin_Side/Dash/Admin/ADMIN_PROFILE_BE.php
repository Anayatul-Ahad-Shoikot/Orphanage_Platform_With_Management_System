<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    if (isset($_SESSION['acc_id']) && isset($_SESSION['role'])) {
        $acc_id = $_SESSION['acc_id'];
        $role = $_SESSION['role'];
        $sql = "SELECT u.acc_name, u.acc_join_date, u.acc_email, d.admin_contact, d.admin_name, d.admin_priyority, d.admin_image FROM accounts AS u LEFT JOIN admin_list AS d ON u.acc_id = d.acc_id WHERE u.acc_id = $acc_id";
        $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $admin_name = $row['admin_name'];
                $acc_join_date = $row['acc_join_date'];
                $acc_email = $row['acc_email'];
                $admin_contact = $row['admin_contact'];
                $admin_priyority = $row['admin_priyority'];
                $admin_image = $row['admin_image'];
            } else {
                echo "Failed to fetch data";
            }
        } else {
            echo "Error to load session";
    }
    mysqli_close($con);
?>

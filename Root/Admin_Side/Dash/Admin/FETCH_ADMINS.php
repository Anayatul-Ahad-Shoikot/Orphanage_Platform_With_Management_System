<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    
    if (isset($_SESSION['acc_id']) && isset($_SESSION['role'])) {
        $acc_iddd = $_SESSION['acc_id'];
        $sql = "SELECT x.admin_id, x.acc_id, x.admin_name, x.admin_contact, x.admin_image, x.admin_priyority, y.acc_name, y.acc_email, y.acc_join_date  FROM admin_list AS x LEFT JOIN accounts AS y ON x.acc_id = y.acc_id WHERE x.acc_id != $acc_iddd";
        $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo  '<div class="box st">
                    <div>
                        <img src="' . $row['admin_image'] . '" alt="">
                    </div>
                    <form action="/Root/Admin_Side/Dash/Admin/REMOVE_ADMIN.php" method="POST">
                        <input type="text" name="admin_name" placeholder="' . $row['admin_name'] . '" disabled>
                        <input type="text" name="acc_email" placeholder="' . $row['acc_email'] . '" disabled>
                        <input type="text" name="admin_contact" placeholder="' . $row['admin_contact'] . '" disabled>
                        <input type="text" name="admin_priyority" placeholder="' . $row['admin_priyority'] . '" disabled>
                        <input type="text" name="acc_join_date" placeholder="' . $row['acc_join_date'] . '" disabled>
                        <input type="hidden" name="acc_id" value="' . $row['acc_id'] . '">
                        <input type="hidden" name="admin_id" value="' . $row['admin_id'] . '">
                        <button type="submit" name="delete">Remove</button>
                    </form>
                    </div>';
                }
            } else {
                echo "No Record Found";
            }
        } else {
            echo "Error to load session";
    }
    mysqli_close($con);
?>

<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    
    if (isset($_SESSION['user_id']) && isset($_SESSION['acc_type'])) {
        $id = $_SESSION['user_id'];
        $sql = "SELECT x.user_id, x.priyority, x.image, y.user_name, y.user_email, y.since  FROM admin_details AS x LEFT JOIN user_account AS y ON x.user_id = y.user_id WHERE x.user_id != $id";
        $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo  '<div class="box st">
                    <div>
                        <img src="' . $row['image'] . '" alt="User Image">
                    </div>
                    <form>
                        <input type="text" name="user_name" placeholder="' . $row['user_name'] . '" disabled>
                        <input type="text" name="user_email" placeholder="' . $row['user_email'] . '" disabled>
                        <input type="text" name="priyority" placeholder="' . $row['priyority'] . '" disabled>
                        <input type="text" name="priyority" placeholder="' . $row['since'] . '" disabled>
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

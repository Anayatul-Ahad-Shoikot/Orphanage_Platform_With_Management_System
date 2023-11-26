<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    
    if (isset($_SESSION['user_name']) && isset($_SESSION['acc_type'])) {
        $name = $_SESSION['user_name'];
        $sql = "SELECT x.user_name, x.priyority, x.image, x.contact, y.user_name, y.user_email, y.since  FROM admin_details AS x LEFT JOIN user_account AS y ON x.user_name = y.user_name WHERE x.user_name != '$name'";
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
                        <input type="text" name="contact" placeholder="' . $row['contact'] . '" disabled>
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

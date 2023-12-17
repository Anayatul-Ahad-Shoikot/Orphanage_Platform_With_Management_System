<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $post_id = $_GET['post_id'];

    $query = "DELETE FROM blog_post WHERE post_id = $post_id";
    mysqli_query($con, $query);

    header("Location:/Root/Admin_Side/website/HOME.php");

    mysqli_close($con);
?>

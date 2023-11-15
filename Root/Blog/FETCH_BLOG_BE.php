<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

        if (isset($_GET['post_id'])) {
            $post_id = $_GET['post_id'];
            $query = "SELECT * FROM blog_post WHERE post_id = ?";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, 'i', $post_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $img_path = $row['img_path'];
                $title = $row['title'];
                $user_name = $row['user_name'];
                $published = $row['published'];
                $content = $row['content'];
                $query2 = "SELECT * FROM blog_actions WHERE post_id = $post_id";
                $result2 = mysqli_query($con, $query2);
                if (mysqli_num_rows($result2) > 0) {
                    $row2= mysqli_fetch_assoc($result2);
                    $likes = $row2['likes'];
                }
            } else {
                echo 'Blog post not found.';
            }
        } else {
            echo "Error";
        }

    mysqli_close($con);
?>
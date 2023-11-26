<?php
    include ('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
        
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
            $post_id = mysqli_real_escape_string($con, $_POST['post_id']);
            $comment_content = mysqli_real_escape_string($con, $_POST['comments']);
            $insertCommentQuery = "INSERT INTO blog_comment (post_id, user_name, comments, date) VALUES ('$post_id', '$user_name', '$comment_content', NOW())";

            if (mysqli_query($con, $insertCommentQuery)) {
                header("Location: /Root/Blog/O_VIEW_BLOG.php?post_id=$post_id");
                exit();
            } else {
                echo "Error: " . mysqli_error($con);
            }
        } else {
            echo "Invalid request method.";
        }
    mysqli_close($con);
?>
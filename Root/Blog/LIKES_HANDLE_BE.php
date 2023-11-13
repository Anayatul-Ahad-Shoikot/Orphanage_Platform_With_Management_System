<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

        if (isset($_POST['like']) && isset($_POST['post_id'])) {
            $post_id = $_POST['post_id'];
            $viewerUsername = $_SESSION['user_name'];
            $unlikeQuery = "";
            $likeQuery = "";
            $checkQuery = "SELECT * FROM blog_likes WHERE post_id = $post_id AND viewer_username = '$viewerUsername'";
            $checkResult = mysqli_query($con, $checkQuery);
            if (mysqli_num_rows($checkResult) > 0) {
                $remove = "DELETE FROM blog_likes WHERE post_id = $post_id AND viewer_username = '$viewerUsername'";
                mysqli_query($con, $remove);
                $reduceLike = "UPDATE blog_actions SET likes = (likes - 1) WHERE post_id = $post_id";
                mysqli_query($con, $reduceLike);
                if($_SESSION['acc_type']=='user'){
                    header("Location: /Root/Blog/U_VIEW_BLOG.php?post_id=$post_id");
                    exit(0);
                } else {
                    header("Location: /Root/Blog/O_VIEW_BLOG.php?post_id=$post_id");
                    exit(0);
                }
            exit(0);
            } else {
                $add = "INSERT INTO blog_likes (post_id, viewer_username) VALUES ('$post_id', '$viewerUsername')";
                mysqli_query($con, $add);
                $increaseLike = "UPDATE blog_actions SET likes = (likes + 1) WHERE post_id = $post_id";
                mysqli_query($con, $increaseLike);
                if($_SESSION['acc_type']=='user'){
                    header("Location: /Root/Blog/U_VIEW_BLOG.php?post_id=$post_id");
                    exit(0);
                } else {
                    header("Location: /Root/Blog/O_VIEW_BLOG.php?post_id=$post_id");
                    exit(0);
                }
                exit(0);
            }
        } else {
            echo 'Invalid request.';
        }
    mysqli_close($con);
?>

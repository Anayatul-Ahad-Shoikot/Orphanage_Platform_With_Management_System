<?php
    include ('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if (isset($_GET['post_id'])) {
        $post_id = mysqli_real_escape_string($con, $_GET['post_id']);
        $fetchCommentsQuery = "SELECT * FROM blog_comment WHERE post_id = '$post_id'";
        $commentsResult = mysqli_query($con, $fetchCommentsQuery);
        if ($commentsResult) {
            while ($comment = mysqli_fetch_assoc($commentsResult)) {
                echo '<div class="cmnt">';
                echo '<span class="comment-author">' . $comment['user_name'] . '</span>';
                echo '<span class="time">' . $comment['date'] . '</span>';
                echo '<div class="comment">';
                echo '<p class="comment-content">' . $comment['comments'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'Failed to fetch comments.';
        }
    } else {
        echo 'Invalid request.';
    }
    mysqli_close($con);
?>

<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    $query = "SELECT u.post_id, u.acc_id, u.post_title, u.post_content, u.post_category, u.post_image, u.published. v.acc_id, v.acc_name FROM blog_post AS u
        LEFT JOIN accounts AS v ON v.acc_id = u.acc_id
        ORDER BY published DESC LIMIT 10";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="blog-post">';
            echo '<div class="blog-post_img"><img src="../../Blog/' . $row['img_path'] . '" alt="' . $row['post_title'] . '"></div>';
            echo '<div class="blog-post_info">';
            echo '<h1 class="blog-post_title">' . $row['post_title'] . '</h1>';
            echo '<div class="blog-post_date">';
            echo '<span>By ' . $row['acc_name'] . '</span>';
            echo '<span> &emsp;' . $row['published'] . '</span>';
            echo '</div>';
            echo '<p class="blog-post_content">' . $row['content'] . '</p>';
            echo '<div class="info">';
            echo '<a href="#?post_id=' . $row['post_id'] . '" class="blog-post_cta"> Edit </a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No blog posts found.';
    }

mysqli_close($con);
?>

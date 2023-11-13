<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    $query = "SELECT u.post_id, u.title, u.user_name, u.content, u.category,
    u.img_path, u.published, d.post_id, d.likes, d.comments FROM blog_post AS u LEFT JOIN blog_actions AS d ON u.post_id = d.post_id";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="blog-post">';
            echo '<div class="blog-post_img"><img src="..//..//Blog/' . $row['img_path'] . '" alt="' . $row['title'] . '"></div>';
            echo '<div class="blog-post_info">';
            echo '<h1 class="blog-post_title">' . $row['title'] . '</h1>';
            echo '<div class="blog-post_date">';
            echo '<span>By ' . $row['user_name'] . '</span>';
            echo '<span> &emsp;' . $row['published'] . '</span>';
            echo '</div>';
            echo '<p class="blog-post_content">' . $row['content'] . '</p>';
            echo '<div class="info">';
            if($_SESSION['acc_type'] == 'user'){
                echo '<a href="/Root/Blog/U_VIEW_BLOG.php?post_id=' . $row['post_id'] . '" class="blog-post_cta">Read More</a>';
            } else {
                echo '<a href="/Root/Blog/O_VIEW_BLOG.php?post_id=' . $row['post_id'] . '" class="blog-post_cta">Read More</a>';
            }
            echo '<div class="likes">';
            echo '<i class="bx bxs-like"></i>';
            echo '<a class="like">    ' .$row['likes'] . '</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No blog posts found.';
    }

mysqli_close($con);
?>

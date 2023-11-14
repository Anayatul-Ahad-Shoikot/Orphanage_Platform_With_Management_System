<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    
    $acc_type = $_SESSION['acc_type'];
    $query = "SELECT * FROM org_details";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="blog-post">';
            echo '<div class="x">';
            echo '<div class="blog-post_img"><img src="..//..//Dashboards/Own-Profiles/Org/' . $row['logo_path'] . '" alt=""></div>';
            echo '<div class="blog-post_info">';
            echo '<h1 class="blog-post_title">' . $row['org_name'] . '</h1>';
            echo '<div class="blog-post_date">';
            echo '<span>Phone : ' . $row['contact_phone'] . '</span>';
            echo '<span> &emsp; Email : ' . $row['contact_email'] . '</span>';
            echo '</div>';
            echo '<p class="blog-post_content">' . $row['description'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="info">';
            if ( $acc_type == 'org' ) {
                echo '<a href="/Root/Org_Page/O_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > View </a>';
            } else if ( $acc_type == 'admin' ) {
                echo '<a href="/Root/Org_Page/O_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > View </a>';
            } else {
                echo '<a href="/Root/Org_Page/O_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > View </a>';
            }
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No blog posts found.';
    }

mysqli_close($con);
?>
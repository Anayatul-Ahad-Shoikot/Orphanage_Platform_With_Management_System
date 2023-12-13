<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    
    $role = $_SESSION['role'];
    $acc_id = $_SESSION['acc_id'];
    $query = "SELECT * FROM org_list WHERE acc_id != $acc_id";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="blog-post">';
            echo '<div class="x">';
            echo '<div class="blog-post_img"><img src="..//..//Dashboards/Own-Profiles/Org/' . $row['org_logo'] . '" alt=""></div>';
            echo '<div class="blog-post_info">';
            echo '<h1 class="blog-post_title">' . $row['org_name'] . '</h1>';
            echo '<div class="blog-post_date">';
            echo '<span>Phone : ' . $row['org_phone'] . '</span>';
            echo '<span> &emsp; Email : ' . $row['org_email'] . '</span>';
            echo '</div>';
            echo '<p class="blog-post_content">' . $row['org_description'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="info">';
            if ( $role == 'org' ) {
                echo '<a href="/Root/Org_Page/O_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > View </a>';
            } else if ( $role == 'admin' ) {
                echo '<a href="/Root/Org_Page/O_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > View </a>';
            } else {
                echo '<a href="/Root/Org_Page/U_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > View </a>';
                echo '<a href="/Root/D & A/Donations/U_DONATION_DASH.php?org_id=' . $row['org_id'] . '" class="blog-post_cta" > Donate </a>';
            }
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No blog posts found.';
    }

mysqli_close($con);
?>
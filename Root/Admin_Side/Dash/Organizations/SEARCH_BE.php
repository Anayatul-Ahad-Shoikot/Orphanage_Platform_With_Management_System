<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
        $search = $_GET['query'];
        if (!empty($search)) {
            $query = "SELECT * FROM org_list WHERE org_name LIKE '%$search%' OR org_location LIKE '%$search%' OR org_description LIKE '%$search%'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="blog-post">';
                    echo '<div class="x">';
                    echo '<div class="blog-post_img"><img src="../../../Dashboards/Own-Profiles/Org/' . $row['org_logo'] . '" alt=""></div>';
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
                    echo '<a href="/Root/Admin_Side/Dash/Organizations/VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > View </a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'No organization found';
            }
        } else {
            echo '<p>Please provide what you want to search.</p>';
        }
    } else {
        echo "Error to fetch.";
    }
    mysqli_close($con);
?>
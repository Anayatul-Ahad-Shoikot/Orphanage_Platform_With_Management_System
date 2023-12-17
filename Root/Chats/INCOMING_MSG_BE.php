<?php 
    include('/xampp//htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

            $current_user = $_GET['org_id'];

            $query = "SELECT 
                        subquery.user_id,
                        CASE 
                            WHEN ul.user_id IS NOT NULL THEN ul.user_name
                            ELSE ol.org_name
                        END AS name,
                        CASE 
                            WHEN ul.user_id IS NOT NULL THEN ul.user_image
                            ELSE ol.org_logo
                        END AS image
                    FROM (
                        SELECT sender_id AS user_id
                        FROM chats
                        WHERE receiver_id = $current_user
                        
                        UNION
                        
                        SELECT receiver_id AS user_id
                        FROM chats
                        WHERE sender_id = $current_user
                    ) AS subquery
                    LEFT JOIN user_list ul ON ul.user_id = subquery.user_id
                    LEFT JOIN org_list ol ON ol.org_id = subquery.user_id";

            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li class="clearfix">';
                        if (isset($row['image']) && strpos($row['image'], 'user_image') !== false) {
                            echo '<img src="#" alt="----">';
                        } else {
                            echo '<img src="#" alt="-----">';
                        }
                        echo '<div class="about">';
                        echo '<div class="name">' . $row['name'] . '</div>';
                        echo '<div class="status">' . $row['user_id'] . '</div>';
                        echo '</div>';
                    echo '</li>';
                }
            } else {
                echo '<p>No users found.</p>';
            }

    mysqli_close($con);
?>
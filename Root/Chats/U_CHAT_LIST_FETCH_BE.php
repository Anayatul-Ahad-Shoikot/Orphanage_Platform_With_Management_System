<?php

    // when any user sending text , i'm considering him as sender & the opponent as receiver.

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

        $sender_id = $_GET['user_id'];

        $query   =   "SELECT 
                        subquery.extracted_receiver_id,
                        CASE 
                            WHEN ul.user_id IS NOT NULL THEN ul.user_name
                            ELSE ol.org_name
                        END AS extracted_receiver_name,
                        CASE 
                            WHEN ul.user_id IS NOT NULL THEN ul.user_image
                            ELSE ol.org_logo
                        END AS extracted_receiver_image,
                        MAX(subquery.date_time) AS latest_chat_time
                    FROM (
                        SELECT sender_id AS extracted_receiver_id, date_time
                        FROM chats
                        WHERE receiver_id = $sender_id
                        UNION
                        SELECT receiver_id AS extracted_receiver_id, date_time
                        FROM chats
                        WHERE sender_id = $sender_id
                    ) AS subquery
                    LEFT JOIN user_list ul ON ul.user_id = subquery.extracted_receiver_id
                    LEFT JOIN org_list ol ON ol.org_id = subquery.extracted_receiver_id
                    GROUP BY subquery.extracted_receiver_id, extracted_receiver_name, extracted_receiver_image
                    ORDER BY latest_chat_time DESC";

            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="/Root/Chats/U_CHAT_DASH.php?user_id='.$sender_id.'&current_user=' . $sender_id . '&selected_user=' . $row['extracted_receiver_id'] . '">';
                    echo '<li class="clearfix" data-user-id="' . $row['extracted_receiver_id'] . '">';
                    echo '<div class="about">';
                    echo '<div class="name">' . $row['extracted_receiver_name'] . '</div>';
                    echo '</div>';
                    echo '</li>';
                    echo '</a>';
                }
            } else {
                echo '<p>No users found.</p>';
            }

    mysqli_close($con);

?>
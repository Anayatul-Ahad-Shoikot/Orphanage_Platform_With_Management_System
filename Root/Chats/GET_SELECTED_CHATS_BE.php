<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');


    if (isset($_GET['current_user']) && isset($_GET['selected_user']) && !empty($_GET['current_user']) && !empty($_GET['selected_user'])) {
                $current_user = $_GET['current_user'];
                $selected_user = $_GET['selected_user'];

                $query = "SELECT * FROM chats 
                        WHERE (sender_id = $current_user AND receiver_id = $selected_user)
                        OR (sender_id = $selected_user AND receiver_id = $current_user)
                        ORDER BY date_time";

                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    echo '<ul class="m-b-0">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li class="clearfix">';
                        if ($row['receiver_id'] == $current_user) {
                            echo '<div class="message-data">';
                            echo '<span class="message-data-time">' . $row['date_time'] . '</span>';
                            echo '</div>';
                            echo '<div class="message my-message">' . $row['msg'] . '</div>';
                        } else {
                            echo '<div class="message-data text-right">';
                            echo '<span class="message-data-time">' . $row['date_time'] . '</span>';
                            echo '</div>';
                            echo '<div class="message my-message float-right">' . $row['msg'] . '</div>';
                        }
                        echo '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>No chat history found.</p>';
                }
    } 

    mysqli_close($con);
?>

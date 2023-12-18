<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $acc_id = $_SESSION['acc_id'];
    $fetchNotificationsQuery = "SELECT * FROM notifications 
                                WHERE org_id = (SELECT org_id FROM org_list WHERE acc_id = $acc_id)
                                ORDER BY is_read ASC, date DESC LIMIT 10";
    $notificationsResult = mysqli_query($con, $fetchNotificationsQuery);
    if ($notificationsResult) {
        while ($notification = mysqli_fetch_assoc($notificationsResult)) {
            $content = $notification['content'] === "requested to adopt" ? "Adoption request submitted." : $notification['content'];
            $class = ($notification['is_read'] == 0) ? ' unseen" style="background: lightpink;' : '';
            echo '<div class="notifi-item' . $class . '" onclick="markAsRead(' . $notification['notification_id'] . ', this)">';
            echo '<div class="text">';
            echo '<h4>' . $content . '</h4>';
            echo '<p>' . $notification['date'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } 
    mysqli_close($con);
?>

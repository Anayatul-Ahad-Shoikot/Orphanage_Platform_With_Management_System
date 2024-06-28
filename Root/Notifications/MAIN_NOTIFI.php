<?php
    include('../../Includes/db_con.php');
    $acc_id = $_SESSION['acc_id'];
    $fetchUnreadNotificationsQuery = "SELECT COUNT(*) as unread_count FROM notifications 
                                        WHERE is_read = 0 AND user_id = (SELECT user_id FROM user_list WHERE acc_id = $acc_id)";
    $unreadNotificationsResult = mysqli_query($con, $fetchUnreadNotificationsQuery);
    $unreadCount = 0;
    if ($unreadNotificationsResult) {
        $unreadRow = mysqli_fetch_assoc($unreadNotificationsResult);
        $unreadCount = $unreadRow['unread_count'];
    }
?>
    
    <div class="icon" onclick="toggleNotifi()">
        <img src="/Root/Home_Page/bell.png" alt=""><span style="background-color: <?php echo ($unreadCount > 0) ? 'red' : 'transparent'; ?>">00</span>
    </div>
    <div class="notifi-box" id="box">
        <h2>Notifications</h2>
        <?php
            include('U_FETCH_NOTIFICATION_BE.php');
        ?>
    </div>
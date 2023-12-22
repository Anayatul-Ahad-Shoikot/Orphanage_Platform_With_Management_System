<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    
    $acc_id = $_SESSION['acc_id'];
    $org_id = $_GET['org_id'];
    $query0 = "SELECT org_name FROM org_list WHERE org_id = $org_id";
    $result0 = mysqli_query($con, $query0);
    $row0 = mysqli_fetch_assoc($result0);
    $org_name = $row0['org_name'];

    $query1 = "SELECT user_id FROM user_list WHERE acc_id = $acc_id";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $user_id = $row1['user_id'];
    $query2 = "SELECT * FROM chats WHERE (sender_id = $user_id AND receiver_id = $org_id) OR (sender_id = $org_id AND receiver_id = $user_id) ORDER BY date_time";
    $result2 = mysqli_query($con, $query2);
    if (!$result2) {
        die('Query Error: ' . mysqli_error($con));
    } else {
        while ($row2 = mysqli_fetch_assoc($result2)) {
            $message = $row2['msg'];
            $sender_id = $row2['sender_id'];
            $receiver_id = $row2['receiver_id'];
            $date_time = $row2['date_time'];
            if ($sender_id == $user_id) {
                echo '<li class="clearfix">';
                echo '<div class="message-data align-right">';
                echo '<span class="message-data-time">' . $date_time . '</span>&nbsp;&nbsp;';
                echo '<span class="message-data-name">You</span><i class="fa fa-circle me"></i>';
                echo '</div>';
                echo '<div class="message other-message float-right">';
                echo '<p>' . $message . '</p>';
                echo '</div>';
                echo '</li>';
            } elseif ($receiver_id == $user_id) {
                echo '<li>';
                echo '<div class="message-data">';
                echo '<span class="message-data-name"><i class="fa fa-circle online"></i>'. $org_name .'</span>';
                echo '<span class="message-data-time">' . $date_time . '</span>';
                echo '</div>';
                echo '<div class="message my-message">';
                echo $message;
                echo '</div>';
                echo '</li>';
            }
        }
    }
    $_SESSION['showChatBox'] = 1;
    mysqli_close($con);
?>
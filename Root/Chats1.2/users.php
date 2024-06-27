<?php
session_start();
include_once "/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php";

$acc_id = $_SESSION['acc_id'];
$sql1 = "SELECT user_id FROM user_list WHERE acc_id = $acc_id";
$query1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($query1);
$outgoing_id = $row1['user_id'];

$output = "";

// Get the latest message for each unique chat partner
$sql2 = "SELECT t1.chat_with_id, t1.msg, t1.outgoing_msg_id
         FROM (
             SELECT DISTINCT
                 CASE
                     WHEN outgoing_msg_id = $outgoing_id THEN incoming_msg_id
                     ELSE outgoing_msg_id
                 END AS chat_with_id,
                 msg,
                 outgoing_msg_id,
                 chat_id
             FROM chats
             WHERE outgoing_msg_id = $outgoing_id OR incoming_msg_id = $outgoing_id
             ORDER BY chat_id DESC
         ) AS t1
         GROUP BY t1.chat_with_id
         ORDER BY t1.chat_id DESC";
$query2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($query2) > 0) {
    while ($row2 = mysqli_fetch_assoc($query2)) {
        $chat_with_id = $row2['chat_with_id'];
        $msg = $row2['msg'];
        $outgoing_msg_id = $row2['outgoing_msg_id'];

        $result = (strlen($msg) > 28) ? substr($msg, 0, 28) . '...' : $msg;
        $you = ($outgoing_id == $outgoing_msg_id) ? "You: " : "";

        $sql3 = "SELECT org_logo, org_name FROM org_list WHERE org_id = $chat_with_id";
        $result3 = mysqli_query($con, $sql3);
        $row3 = mysqli_fetch_assoc($result3);

        $output .= '<a href="chat.php?out_id='. $outgoing_id .'&in_id=' . $chat_with_id . '">
                        <div class="content">
                            <img src="../Dashboards/Own-Profiles/Org/'. $row3['org_logo'] .'" alt="">
                            <div class="details">
                                <span>'. $row3['org_name'] .'</span>
                                <p>'. $you . $result .'</p>
                            </div>
                        </div>
                    </a>';
    }
} else {
    $output = "No chats yet...";
}

echo $output;
?>

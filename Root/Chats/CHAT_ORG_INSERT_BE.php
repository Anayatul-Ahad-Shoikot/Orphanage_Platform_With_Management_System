<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    $current_user = $_GET['current_user'];
    $selected_user = $_GET['selected_user'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $msg = $_POST["msg"];
        if ($msg){
            $sql = "INSERT INTO chats (sender_id, receiver_id, msg) VALUES ($current_user, $selected_user, '$msg')";
            if (mysqli_query($con, $sql)) {
                echo '<script>window.location.href = "/Root/Chats/O_CHAT_DASH.php?org_id=' . $current_user . '&current_user='.$current_user.'&selected_user='.$selected_user.'";</script>';
            }
        } else {

        }
    } else {
        header("Location: /Root/Chats/O_CHAT_DASH.php?org_id=' . $current_user . '");
        exit();
    }
    mysqli_close($con);
?>
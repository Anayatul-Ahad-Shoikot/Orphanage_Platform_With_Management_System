<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
    $acc_id = $_SESSION['acc_id'];
    $query = "SELECT user_id FROM user_list WHERE acc_id = $acc_id";
    if ($row = mysqli_fetch_assoc(mysqli_query($con, $query))) {
        $user_id = $row["user_id"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $msg = $_POST["msg"];
        $org_id = $_POST["org_id"];
        $org_name = $_POST["org_name"];
        if ($msg){
            $sql = "INSERT INTO chats (sender_id, receiver_id, msg) VALUES ($user_id, $org_id, '$msg')";
            if (mysqli_query($con, $sql)) {
                echo '<script>window.location.href = "/Root/Org_Page/U_VIEW_ORG.php?org_id=' . $org_id . '";</script>';
            }
        } else {

        }
    }
    mysqli_close($con);
?>

<?php 
    session_start();
    include_once "/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php";

        $acc_id = $_SESSION['acc_id'];
        $sql1 = "SELECT user_id FROM user_list WHERE acc_id = $acc_id";
        $query1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_assoc($query1);
        $outgoing_id = $row1['user_id'];

        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM chats
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY chat_id";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;

?>
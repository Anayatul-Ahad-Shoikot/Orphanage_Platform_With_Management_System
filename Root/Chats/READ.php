<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $receiverId = $_GET['receiver_id'];
    $sql = "SELECT * FROM chats WHERE receiver_id='$receiverId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo '<p><strong>' . $row['sender_id'] . ':</strong> ' . $row['message'] . '</p>';
        }
    } else {
        echo 'No messages yet';
    }

    $conn->close();
    }
?>

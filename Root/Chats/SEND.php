<?php

  include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senderId = 2;
    $receiverId = $_POST['receiver_id'];
    $message = $_POST['message'];
    $sql = "INSERT INTO messages (sender_id, receiver_id, message) VALUES ('$senderId', '$receiverId', '$message')";
    if ($conn->query($sql) === TRUE) {
      echo 'Message sent successfully';
    } else {
      echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    $conn->close();
  }
?>

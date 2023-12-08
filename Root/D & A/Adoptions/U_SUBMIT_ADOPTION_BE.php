<?php

    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $occupation = $_POST['occupation'];
        $income = $_POST['income'];
        $maritalStatus = $_POST['maritalStatus'];
        $reason = $_POST['reason'];
        $children = $_POST['children'];
        $livingEnvironment = $_POST['livingEnvironment'];
        $expectations = $_POST['expectations'];
        $additionalInfo = $_POST['additionalInfo'];
        $orphan_id = $_POST['orphan_id'];
        $acc_id = $_POST['acc_id'];

        $query = "INSERT INTO adoptions (orphan_id, acc_id, email, phone, occupation, income, maritalStatus, reason, children, livingEnvironment, expectations, additionalInfo) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "iisssdssisss", $orphan_id, $acc_id, $email, $phone, $occupation, $income, $maritalStatus, $reason, $children, $livingEnvironment, $expectations, $additionalInfo);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        $content = "requested to adopt";
        $sql = "SELECT org_id FROM orphan_list WHERE orphan_id = $orphan_id";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $org_id = $row['org_id'];
        }

        $sql2 = "SELECT user_id FROM user_list WHERE acc_id = $acc_id";
        $result2 = mysqli_query($con, $sql2);
        while ($row2 = mysqli_fetch_assoc($result2)) {
            $user_id = $row2['user_id'];
        }

        $queryNotifications = "INSERT INTO notifications (user_id, org_id, orphan_id, content) VALUES (?, ?, ?, ?)";
        $stmtNotifications = mysqli_prepare($con, $queryNotifications);
        mysqli_stmt_bind_param($stmtNotifications, "iiis", $user_id, $org_id, $orphan_id, $content);
        mysqli_stmt_execute($stmtNotifications);
        mysqli_stmt_close($stmtNotifications);

        header("Location: /Root/D & A/Adoptions/U_CONFIRMATION_WINDOW.php");
    }
    mysqli_close($con);
?>
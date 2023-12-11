<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['go'])) {
            $enteredCode = $_POST['var_code'];
            $storedCode = $_SESSION['reset_code'];
            if ($enteredCode == $storedCode) {
                $resetStartTime = $_SESSION['reset_start_time'];
                $currentTime = time();
                $timeDifference = $currentTime - $resetStartTime;
                if ($timeDifference <= 40) {
                    $acc_name = $_SESSION['acc_name'];
                    $acc_email = $_SESSION['acc_email'];
                    $newPassword = $_SESSION['acc_pass'];
                    $updateSql = "UPDATE accounts SET acc_pass = '$hashedPassword' WHERE acc_name = '$acc_name' AND acc_email = '$acc_email'";
                    if ($con->query($updateSql) === TRUE) {
                        $_SESSION['notify'] = "Password reset successful!";
                        header("Location: /Root/Login_Page/LOGIN_FORM.php");
                        exit();
                    } else {
                        $_SESSION['status-2'] = "Error updating password: ";
                        header("Location: /Root/Reset_Password/CODE.php");
                        exit();
                    }
                } else {
                    $_SESSION['status-2'] = "Time limit exceeded. Please try again.";
                    header("Location: /Root/Reset_Password/RESET.php");
                    exit();
                }
            } else {
                $_SESSION['status-2'] = "Incorrect verification code.";
                header("Location: /Root/Reset_Password/CODE.php");
                exit();
            }
        }
    }
?>

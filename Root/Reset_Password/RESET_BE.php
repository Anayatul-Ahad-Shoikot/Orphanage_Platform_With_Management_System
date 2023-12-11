<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '/xampp/htdocs/DBMS_Project_Organized_One/vendor/autoload.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['save_btn'])) {
            $acc_name = $_POST['acc_name'];
            $acc_email = $_POST['acc_email'];
            $acc_pass = $_POST['acc_pass'];
            $rep_pass = $_POST['rep_pass'];

            if ($acc_pass !== $rep_pass) {
                $_SESSION['status-2'] = "Passwords do not match!";
                header("Location: /Root/Reset_Password/RESET.php");
                exit();
            }

            $sql = "SELECT * FROM accounts WHERE acc_name = '$acc_name' AND acc_email = '$acc_email'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                $hashedPassword = password_hash($acc_pass, PASSWORD_DEFAULT);
                $randomCode = mt_rand(10000, 99999);
                $_SESSION['reset_code'] = $randomCode;
                $_SESSION['reset_start_time'] = time();
                $_SESSION['acc_name'] =  $acc_name;
                $_SESSION['acc_email'] =  $acc_email;
                $_SESSION['acc_pass'] =  $hashedPassword;

                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'careserenityorg@gmail.com';
                    $mail->Password = 'DBMSPROJECT';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    $mail->setFrom('careserenityorg@gmail.com', 'CareSerenityOrg');
                    $mail->addAddress($acc_email, $acc_name);
        
                    $mail->isHTML(true);
                    $randomCode = mt_rand(10000, 99999);
                    $mail->Subject = 'Password Reset';
                    $mail->Body = 'Your verification code is: ' . $randomCode;
        

                    if ($mail->send()) {
                        header("Location: /Root/Reset_Password/CODE.php");
                        exit();
                    } else {
                        //$_SESSION['status-2'] = "Error sending email!";
                        echo (error_log("Email sending failed: " . error_get_last()['message']));
                        //header("Location: /Root/Reset_Password/RESET.php");
                        //exit();
                    }
                } catch (Exception $e) {
                    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                $_SESSION['status-2'] = "Account not found";
                header("Location: /Root/Reset_Password/RESET.php");
                exit();
            }
        }
    }
    $con->close();
?>



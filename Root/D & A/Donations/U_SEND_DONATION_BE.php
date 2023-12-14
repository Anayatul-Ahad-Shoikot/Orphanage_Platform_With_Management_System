<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();


        if (isset($_POST['donate']) && $_SERVER['REQUEST_METHOD'] == "POST") {

            $org_id = $_POST['org_id'];
            $acc_id = $_SESSION['acc_id'];
            $donor_email = $_POST['donor_email'];
            $payment_method = $_POST['pay'];
            $amount = $_POST['amount'];

            $sql = "SELECT org_name FROM org_list WHERE org_id = $org_id";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $org_name = $row['org_name'];
            }

            $sql = "SELECT user_id FROM user_list WHERE acc_id = $acc_id";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $user_id = $row['user_id'];
            }

            if($payment_method == 'card') {

                $card_no = $_POST['card_no'];
                $card_cvc = $_POST['card_cvc'];
                $card_exp_month = $_POST['card_exp_month'];
                $card_exp_year = $_POST['card_exp_year'];

                $insert_query = "INSERT INTO donations (donor_id, receiver_id, receiver_type, donor_email, payment_method, card_no, card_cvc, card_exp_month, card_exp_year, amount) VALUES ($user_id, $org_id, 'organization', '$donor_email', '$payment_method', '$card_no' , '$card_cvc', '$card_exp_month', '$card_exp_year', $amount)";

                if(mysqli_query($con, $insert_query)) {

                    $content = "Donation $amount Tk sent to $org_name";
                    $queryNotifications = "INSERT INTO notifications (user_id, org_id, content) VALUES (?, ?, ?)";
                    $stmtNotifications = mysqli_prepare($con, $queryNotifications);
                    mysqli_stmt_bind_param($stmtNotifications, "iis", $user_id, $org_id, $content);
                    mysqli_stmt_execute($stmtNotifications);
                    mysqli_stmt_close($stmtNotifications);
                    $_SESSION['success'] = "Donation sent successfully.";
                    header('Location: /Root/Home_Page/U_HOME.php');
                    exit();

                } else {

                    $content = "Donation $amount Tk failed to sent to $org_name";
                    $queryNotifications = "INSERT INTO notifications (user_id, org_id, content) VALUES (?, ?, ?)";
                    $stmtNotifications = mysqli_prepare($con, $queryNotifications);
                    mysqli_stmt_bind_param($stmtNotifications, "iis", $user_id, $org_id, $content);
                    mysqli_stmt_execute($stmtNotifications);
                    mysqli_stmt_close($stmtNotifications);
                    $_SESSION['error'] = "Faild to donate.";
                    header('Location: /Root/Home_Page/U_HOME.php');
                }

            } elseif($payment_method == 'bkash'){

                $bkash_no = $_POST['bkash_no'];
                $Bkash_trans = $_POST['Bkash_trans'];

                $insert_query = "INSERT INTO donations (donor_id, receiver_id, donor_email, payment_method, bkash_no, Bkash_trans, amount) VALUES ($user_id, $org_id, '$donor_email', '$payment_method', '$bkash_no' , '$Bkash_trans', $amount)";

                if(mysqli_query($con, $insert_query)) {

                    $content = "Donation $amount Tk sent to $org_name";
                    $queryNotifications = "INSERT INTO notifications (user_id, org_id, content) VALUES (?, ?, ?)";
                    $stmtNotifications = mysqli_prepare($con, $queryNotifications);
                    mysqli_stmt_bind_param($stmtNotifications, "iis", $user_id, $org_id, $content);
                    mysqli_stmt_execute($stmtNotifications);
                    mysqli_stmt_close($stmtNotifications);
                    $_SESSION['success'] = "Donation sent successfully.";
                    header('Location: /Root/Home_Page/U_HOME.php');
                    exit();

                } else {

                    $content = "Donation $amount Tk failed to sent to $org_name";
                    $queryNotifications = "INSERT INTO notifications (user_id, org_id, content) VALUES (?, ?, ?)";
                    $stmtNotifications = mysqli_prepare($con, $queryNotifications);
                    mysqli_stmt_bind_param($stmtNotifications, "iis", $user_id, $org_id, $content);
                    mysqli_stmt_execute($stmtNotifications);
                    mysqli_stmt_close($stmtNotifications);
                    $_SESSION['error'] = "Faild to donate.";
                    header('Location: /Root/Home_Page/U_HOME.php');
                }
            }
            mysqli_close($con);
        } else {
            $_SESSION['error'] = "Opps incorrect request";
            header('Location: /Root/D & A/Donations/U_DONATION_DASH.php?org_id=' . $org_id);
            exit();
        }
?>
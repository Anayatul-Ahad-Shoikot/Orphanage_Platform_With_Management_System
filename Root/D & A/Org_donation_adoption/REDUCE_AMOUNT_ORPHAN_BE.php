<?php
    include ('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $orphanId = $_POST['orphanId'];
            $deductAmount = $_POST['deductAmount'];
            $orphanId = mysqli_real_escape_string($con, $orphanId);
            $deductAmount = mysqli_real_escape_string($con, $deductAmount);
            $selectQuery = "SELECT total_amount FROM donations_orphan WHERE orphan_id = $orphanId";
            $result = mysqli_query($con, $selectQuery);
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $currentAmount = $row['total_amount'];
                if ($currentAmount >= $deductAmount) {
                    $newAmount = $currentAmount - $deductAmount;
                    $updateQuery = "UPDATE donations_orphan SET total_amount = $newAmount WHERE orphan_id = $orphanId";
                    if (mysqli_query($con, $updateQuery)) {
                        $_SESSION['success'] = "$deductAmount TK reduced from Orphan-ID = $orphanId";
                        header("Location: /Root/D & A/Org_donation_adoption/ORPHAN_AMOUNT_DASH.php");
                    } else {
                        $_SESSION['error'] = "Operation Failed";
                        header("Location: /Root/D & A/Org_donation_adoption/ORPHAN_AMOUNT_DASH.php");
                    }
                } else {
                    $_SESSION['error'] = "Deduct amount is greater than the current amount!";
                    header("Location: /Root/D & A/Org_donation_adoption/ORPHAN_AMOUNT_DASH.php");
                }
            } else {
                $_SESSION['error'] = "No data found for the orphan ID.";
                header("Location: /Root/D & A/Org_donation_adoption/ORPHAN_AMOUNT_DASH.php");
            }
    mysqli_close($con);
}
?>

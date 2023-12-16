<?php
    include ('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $orphanId = $_POST['orphanId'];
            $deductAmount = $_POST['deductAmount'];

            // Sanitize input data (to prevent SQL injection, etc.)
            $orphanId = mysqli_real_escape_string($con, $orphanId);
            $deductAmount = mysqli_real_escape_string($con, $deductAmount);

            // Fetch current amount
            $selectQuery = "SELECT total_amount FROM donations_orphan WHERE orphan_id = $orphanId";
            $result = mysqli_query($con, $selectQuery);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $currentAmount = $row['total_amount'];

                // Check if the deduct amount is greater than the current amount
                if ($deductAmount <= $currentAmount) {
                    // Calculate new amount after deduction
                    $newAmount = $currentAmount - $deductAmount;

                    // Update the amount in the database
                    $updateQuery = "UPDATE donations_orphan SET total_amount = $newAmount WHERE orphan_id = $orphanId";
                    if (mysqli_query($con, $updateQuery)) {
                        echo "Amount deducted successfully.";
                        header("Location: /Root/D & A/Org_donation_adoption/ORPHAN_AMOUNT_DASH.php");
                    } else {
                        echo "Error updating amount: " . mysqli_error($con);
                    }
                } else {
                    echo "Deduct amount is greater than the current amount!";
                }
            } else {
                echo "No data found for the orphan ID.";
            }


    mysqli_close($con);
}
?>

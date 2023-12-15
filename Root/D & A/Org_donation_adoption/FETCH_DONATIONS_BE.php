<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $acc_id_current = $_SESSION['acc_id'];
    $query1 = "SELECT org_id FROM org_list WHERE acc_id = $acc_id_current";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $org_id_current = $row1['org_id'];

    $query2 = "SELECT COUNT(*) AS total_donations
                    FROM donations AS d
                    WHERE (d.receiver_type = 'orphan'AND EXISTS 
                        (SELECT 1 
                            FROM orphan_list AS o 
                            WHERE o.orphan_id = d.receiver_id 
                            AND o.org_id = $org_id_current)
                    )
                    OR 
                    (d.receiver_type = 'organization' 
                    AND d.receiver_id = $org_id_current)";

    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_assoc($result2);
    $total_donations = $row2['total_donations'];

    mysqli_close($con);
?>
<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();


    $acc_id_current = $_SESSION['acc_id'];
    $query1 = "SELECT org_id FROM org_list WHERE acc_id = $acc_id_current";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $org_id_current = $row1['org_id'];

    echo $org_id_current;


    $query2 = "INSERT INTO donations_orphan (orphan_id, total_amount)
    SELECT orphan_list.orphan_id, SUM(donations.amount) AS total_amount
    FROM orphan_list
    JOIN donations ON donations.receiver_id = orphan_list.orphan_id
    WHERE orphan_list.org_id = $org_id_current
    AND donations.receiver_type = 'orphan'
    GROUP BY orphan_list.orphan_id";
    mysqli_query($con,$query2);
    

?>
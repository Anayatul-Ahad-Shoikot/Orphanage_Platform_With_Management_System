<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    $acc_id_current = $_SESSION['acc_id'];
    $query1 = "SELECT org_id FROM org_list WHERE acc_id = $acc_id_current";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $org_id_current = $row1['org_id'];

    $query2 = "SELECT orl.orphan_id, orl.first_name, orl.last_name, COALESCE(dor.total_amount, 0) AS total_amount
    FROM orphan_list AS orl
    RIGHT JOIN donations_orphan AS dor ON orl.orphan_id = dor.orphan_id AND dor.total_amount != 0.00
    WHERE orl.org_id = $org_id_current";
    
    $Array = [];
    $result2 = mysqli_query($con, $query2);
    if (mysqli_num_rows($result2) > 0) {
        $Array = array();
        while ($row2 = mysqli_fetch_assoc($result2)) {
            $Array[] = array(
                'orphan_id' => $row2['orphan_id'],
                'first_name' => $row2['first_name'],
                'last_name' => $row2['last_name'],
                'total_amount' => $row2['total_amount']
            );
        }
    } else {
        echo "Error retrieving orphans' data: " . mysqli_error($con);
    }

?>
<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $acc_id_current = $_SESSION['acc_id'];

    $query1 = "SELECT org_id FROM org_list WHERE acc_id = $acc_id_current";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $org_id_current = $row1['org_id'];



    $query2 = "SELECT COUNT(*) AS total_adoptions FROM adoptions AS ad
                JOIN orphan_list AS orl ON ad.orphan_id = orl.orphan_id
                WHERE orl.org_id = $org_id_current";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_assoc($result2);
    $total_adoptions = $row2['total_adoptions'];



    $query3 = "SELECT orl.first_name, ul.user_name
        FROM adoptions ad
        JOIN orphan_list orl ON ad.orphan_id = orl.orphan_id
        JOIN user_list ul ON ad.acc_id = ul.acc_id
        WHERE orl.org_id = $org_id_current
        ORDER BY ad.request_date";

    $result3 = mysqli_query($con, $query3);
    if (mysqli_num_rows($result3) > 0) {
        while ($row3 = mysqli_fetch_assoc($result3)) {
            echo $row3['first_name'], " by ", $row3['user_name'];
            echo "<br>";
        }
    }
    

    // $query = "";
    // $result = mysqli_query($con, $query);
    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo '<tr>
    //                 <td>
    //                 <img src="../../Blog/' . $row['post_image'] . '" alt="" />
    //                 <p>' . $row['post_title'] . '</p>
    //                 </td>
    //                 <td>' . $row['acc_name'] . '</td>
    //                 <td>
    //                     <div class="btn">
    //                         <a href="#">View</a>
    //                         <a href="#">remove</a>
    //                     </div>
    //                 </td>
    //             </tr>';
    //     }
    // } else {
    //     echo 'No blog posts found.';
    // }
    mysqli_close($con);
?>
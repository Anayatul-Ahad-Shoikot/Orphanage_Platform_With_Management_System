<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    $query = "SELECT u.post_image, u.post_title, u.post_id, v.acc_name 
                FROM blog_post AS u
                LEFT JOIN accounts AS v
                ON u.acc_id = v.acc_id
                ORDER BY published DESC LIMIT 6";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>
                    <img src="../../Blog/' . $row['post_image'] . '" alt="" />
                    <p>' . $row['post_title'] . '</p>
                    </td>
                    <td>' . $row['acc_name'] . '</td>
                    <td>
                        <div class="btn">
                            <a href="#">View</a>
                            <a href="/Root/Admin_Side/website/REMOVE_BE.php?post_id='.$row['post_id'].'">remove</a>
                        </div>
                    </td>
                </tr>';
        }
    } else {
        echo 'No blog posts found.';
    }
    mysqli_close($con);
?>

<?php
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');

    $query = "SELECT * FROM blog_post ORDER BY published DESC LIMIT 10";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>
                    <img src="../../Blog/' . $row['img_path'] . '" alt="" />
                    <p>' . $row['title'] . '</p>
                    </td>
                    <td>' . $row['user_name'] . '</td>
                    <td><span class="status published"> View </span></td>
                </tr>';
        }
    } else {
        echo 'No blog posts found.';
    }

    mysqli_close($con);
?>

<?php 
    include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
    session_start();

    $adoption_id = $_GET['adoption_id'];
    $orphan_id = $_GET['orphan_id'];
    $user_id = $_GET['user_id'];
    $current_date = date('Y-m-d');
    $query1 = "SELECT first_name, last_name FROM orphan_list WHERE orphan_id = $orphan_id";
    $result1 = mysqli_query($con,$query1);
    if(mysqli_num_rows($result1) == 1){
        $row1 = mysqli_fetch_assoc($result1);
        $firstName = $row1['first_name'];
        $lastName = $row1['last_name'];
    }
    $query2 = "UPDATE adoptions AS ad SET ad.status = 'done', ad.issued_date = '$current_date' WHERE ad.adoption_id = $adoption_id AND ad.status != 'done'";
        if(mysqli_query($con, $query2)) {

            $query3 = "UPDATE notifications SET is_read = 0, content = 'Adoption request approved for $firstName $lastName' WHERE user_id = $user_id AND orphan_id = $orphan_id";
            $query4 = "UPDATE orphan_list SET adoption_status = '1' WHERE orphan_id = $orphan_id";
            if((mysqli_query($con, $query3)) && (mysqli_query($con, $query4))){
                $_SESSION['success'] = "Request approved";
                header("Location: /Root/D & A/Org_donation_adoption/DON_ADOP.php");
            } else {
                $_SESSION['error'] = "Error occured, query failed";
                header("Location: /Root/D & A/Org_donation_adoption/DON_ADOP.php");
            }
        } else {
            $_SESSION['error'] = "Already approved";
            header("Location: /Root/D & A/Org_donation_adoption/DON_ADOP.php");
        }

?>
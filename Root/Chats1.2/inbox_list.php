<?php
session_start();
include_once "/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Chat App | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <?php
                        $sql = mysqli_query($con, "SELECT user_name, user_image FROM user_list WHERE acc_id = {$_SESSION['acc_id']}");
                        if (mysqli_num_rows($sql) > 0) {
                            $row = mysqli_fetch_assoc($sql);
                        }
                    ?>
                    <img src="../Dashboards/Own-Profiles/User/<?php echo $row['user_image']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['user_name'] ?></span>
                        <!-- <p><?php echo $row['status']; ?></p> -->
                    </div>
                </div>
                <a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php?user_id= <?php echo $_SESSION['acc_id']; ?>" class="logout">back</a>

            </header>
            <div class="search">
                <span class="text">Search Organizations to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>

    <script src="users.js"></script>

</body>

</html>
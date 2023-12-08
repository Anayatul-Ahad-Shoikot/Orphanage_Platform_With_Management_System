<?php
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS_BE.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/remixicon.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE_STYLE.css">
    <link rel="stylesheet" href="/Notification_style.css">
    <title> CareSenerity.org | Edit Profile </title>
</head>

<body>
    <header class="header">
        <nav>
            <div class="logo">
                <a href="/Root/Home_Page/U_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="/Root/Home_Page/U_HOME.php">Home</a></li>
                    <li><a href="/Root/Org_Page/U_ORG.php">Orgs.</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php" class="edit_profile">Profile</a></li>
                    <?php
                        include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Notifications/MAIN_NOTIFI.php');
                    ?>
                </ul>
            </div>
        </nav>
    </header>   
    <div class="container">
        <h2>Edit Profile</h2>
        <form action="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE_BE.php" method="post" enctype="multipart/form-data">
            <label>User Name :</label>
            <input type="text" name="user_name" placeholder="<?php echo $user_name ?>" >
            <label>User Contact :</label>
            <input type="text" name="user_contact" placeholder="<?php echo $user_contact ?>" >
            <label>User Gender :</label>
            <input type="text" name="user_gender" placeholder="<?php echo $user_gender ?>">
            <label>User NID :</label>
            <input type="text" name="user_NID" placeholder="<?php echo $user_NID ?>" >
            <label>User Website :</label>
            <input type="text" name="user_website" placeholder="<?php echo $user_website ?>" >
            <label>User Job :</label>
            <input type="text" name="user_job" placeholder="<?php echo $user_job ?>" >
            <label>User Location :</label>
            <input type="text" name="user_location"  placeholder="<?php echo $user_location ?>">
            <label>User Address :</label>
            <input type="text" name="user_address"  placeholder="<?php echo $user_address ?>">
            <div class="opt">
                <div class="part">
                    <label>Profile Picture :</label>
                    <input type="file" name="image" accept="image/*">
                </div>
                <div class="part">
                    <label>Birth Date :</label>
                    <input type="date" name="user_birth" >
                </div>
            </div>
            <div class="btn">
                <button type="submit" name="update">Update</button>
            </div>
        </form>
    </div>

    <script src="/Root/Notifications/Notification_POPUP.js"></script>
    <script src="/Root/Notifications/Notification_color.js"></script>
</body>
</html>

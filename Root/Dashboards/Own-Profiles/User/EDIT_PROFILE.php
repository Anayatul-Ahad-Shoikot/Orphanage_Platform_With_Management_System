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
                <li><a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php">Profile</a></li>
                <li><a href="/Root/Org_Page/U_ORG.php">Orgs.</a></li>
                <li><a href="/Root//D & A//DON_ADOP.php">Donate</a></li>
                <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php" class="active">Edit Profile</a></li>
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
            <label>Full Name :</label>
            <input type="text" name="user_name" placeholder="<?php echo $user_name ?>" >
            <label>Contact :</label>
            <input type="text" name="user_contact" placeholder="<?php echo $user_contact ?>" >
            <label>Gender :</label>
                <select name="user_gender">
                    <option value=''><?php echo $user_gender ?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            <label>NID :</label>
            <input type="text" name="user_NID" placeholder="<?php echo $user_NID ?>" >
            <label>Website (if any):</label>
            <input type="text" name="user_website" placeholder="<?php echo $user_website ?>" >
            <label>Occupation :</label>
            <input type="text" name="user_job" placeholder="<?php echo $user_job ?>" >

            <label>Select Division :</label>
                <select name="user_location">
                    <option value="" disabled selected>Select Division</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                </select>

            <label> Address :</label>
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

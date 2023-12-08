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
    <link rel="stylesheet" href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS_STYLE.css">
    <link rel="stylesheet" href="/Notification_style.css">
    <title>CareSenerity.org | Profile</title>
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
            <li><a href="/Root//D & A//DON_ADOP.php">Donate</a></li>
            <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
            <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php" class="edit_profile">Edit Profile</a></li>
            <?php
                include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Notifications/MAIN_NOTIFI.php');
            ?>
          </ul>
        </div>
  
      </nav>
    </header>
    
    <div class="container">
        <div class="left_portion">
        <div class="userDetails1">
            <div class="profile">
                <figure><img src="<?php echo $user_image ?>" alt="profile" width="250px" height="250px"></figure>
            </div>
            <div class="userDetails">
                <div class="userName">
                    <h1><?php echo $user_name ?></h1>
                </div>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <p><?php echo $user_location ?></p>
                </div>
                <div class="map">
                    <i class='bx bxs-briefcase'></i>
                    <p><?php echo $role ?></p>
                </div>
                <div class="inner_container">
                    <div class="map">
                        <i class='bx bxs-send'></i>
                        <p>Messages</p>
                    </div>
                    <div class="map">
                        <i class='bx bxs-error-alt'></i>
                        <p>Reports</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="work">
                <div class="tabs">
                    <i class='bx bxs-briefcase'></i>
                    <p>Work</p>
                </div>
                <div class="primary">
                    <h1><?php echo $user_job ?></h1>
                </div>
            </div>
        </div>
        <div class="right_portion">
            <div class="tabs">
                <i class="ri-user-3-fill ri"></i>
                <p>About</p>
            </div>
            <h1 class="heading">Basic Information -</h1>
            <div class="info_box">
                <div class="top">
                    <div class="cel">
                        <label>Account Name :</label>
                        <input placeholder="<?php echo $acc_name ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>Account Type :</label>
                        <input placeholder="<?php echo $role ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>Birth Date:</label>
                        <input placeholder="<?php echo $user_birth ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>Gender :</label>
                        <input placeholder="<?php echo $user_gender ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>NID No :</label>
                        <input placeholder="<?php echo $user_NID ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>Since :</label>
                        <input placeholder="<?php echo $acc_join_date ?>" disabled>
                    </div>
                </div>
            </div>
                
            <h1 class="heading">Contact Information -</h1>
            <div class="info_box">
                <div class="top">
                    <div class="cel">
                        <label>Phone :</label>
                        <input placeholder="<?php echo $user_contact ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>Email :</label>
                        <input placeholder="<?php echo $acc_email ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>Web Site :</label>
                        <input placeholder="<?php echo $user_website ?>" disabled>
                    </div>
                    <div class="cel">
                        <label>Address :</label>
                        <input placeholder="<?php echo $user_address ?>" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/Root/Notifications/Notification_POPUP.js"></script>
    <script src="/Root/Notifications/Notification_color.js"></script>
</body>
</html>

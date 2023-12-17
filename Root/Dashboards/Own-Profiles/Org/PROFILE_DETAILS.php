<?php
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS_BE.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <link rel="stylesheet" href="fonts/remixicon.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS_STYLE.css">
    <title>CareSenerity.org | Profile</title>
</head>

<body>
    <header class="header">
      <nav>
        <div class="logo">
          <a href="/Root/Home_Page/O_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
        </div>
        
        <div class="links">
            <ul>
                <li><a href="/Root/Home_Page/O_HOME.php">Home</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php" class="active">Profile</a></li>
                <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
                <li><a href="/Root//Gallary//O_GALLERY_DASH.php">Gallery</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php" class="edit_profile">Edit Profile</a></li>
            </ul>
        </div>
      </nav>
    </header>

    <div class="notification-container">
        <?php
        if(isset($_SESSION['success'])){
            echo '<div class="alert one">
                    <h5>'.$_SESSION['success'].'</h5>
                </div>';
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['error'])){
            echo '<div class="alert two">
                    <h5>'.$_SESSION['error'].'</h5>
                </div>';
            unset($_SESSION['error']);
        }
        ?>
    </div>
    
    <div class="container">
        <div class="left_portion">
            <div class="userDetails1">
                <div>
                    <img src= "<?php echo $org_logo ?>" alt="profile" width="250px" height="250px">
                </div>
                <div class="userDetails">
                    <div class="userName">
                        <h1><?php echo $org_name ?></h1>
                    </div>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <p><?php echo $org_location ?>, Bangladesh</p>
                    </div>
                    <div class="map">
                        <i class='bx bxs-briefcase'></i>
                        <p><?php echo $role ?></p>
                    </div>
                    <div class="inner_container">
                        <div class="map">
                            <i class='bx bxs-send'></i>
                            <a href="/Root/Chats/O_CHAT_DASH.php?org_id=<?php echo $org_id ?>" style="text-decoration: none;"><p>Messages</p></a>
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
                    <p>Motive</p>
                </div>
                <div class="primary">
                    <h1><?php echo $org_vision ?></h1>
                    <p><?php echo $org_description ?></p>
                </div>
            </div>
        </div>

        <div class="options">
            <a href="/Root/D & A/Org_donation_adoption/DON_ADOP.php" class="btn z">Donations & Adoptions</a>
            <a href="#" class="btn x">Oldage</a>
            <a href="/Root/Orphanage/ORPHAN_DASH.php" class="btn y">Orphanage</a>
        </div>


        <div class="right_portion">
            <div class="plate">
                <h1 class="heading">Basic Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>Account Name :</label>
                            <input placeholder="<?php echo $acc_name ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Account Email :</label>
                            <input placeholder="<?php echo $acc_email ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Account Type :</label>
                            <input placeholder="<?php echo $role ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Organization Name :</label>
                            <input placeholder="<?php echo $org_name ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Established :</label>
                            <input placeholder="<?php echo $established ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Since :</label>
                            <input placeholder="<?php echo $acc_join_date ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plate">
                <h1 class="heading">Contact Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>Contact :</label>
                            <input placeholder="<?php echo $org_phone ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Email :</label>
                            <input placeholder="<?php echo $org_email ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Website :</label>
                            <input placeholder="<?php echo $org_website ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Address :</label>
                            <input placeholder="<?php echo $org_location ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const alerts = document.querySelectorAll('.notification-container > div');
    alerts.forEach(function(alert) {
        setTimeout(function() {
        alert.style.opacity = '1';
        setTimeout(function() {
            alert.style.opacity = '0';
            setTimeout(function() {
            alert.style.display = 'none';
            }, 500);
        }, 6000);
        }, 500);
    });
    });
</script>
</body>
</html>

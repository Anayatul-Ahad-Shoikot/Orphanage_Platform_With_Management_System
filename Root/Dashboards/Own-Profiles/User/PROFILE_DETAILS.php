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
            <li><a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php" class="active">Profile</a></li>
            <li><a href="/Root/Org_Page/U_ORG.php">Orgs.</a></li>
            <li><a href="/Root/Org_Page/U_ORG.php">Donate</a></li>
            <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
            <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
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
                    <img src= "<?php echo $user_image ?>" alt="profile" width="250px" height="250px">
                </div>
                <div class="userDetails">
                    <div class="userName">
                        <h1><?php echo $user_name ?></h1>
                    </div>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <p><?php echo $user_address, ", ", $user_location ?></p>
                    </div>
                    <div class="map">
                        <i class='bx bxs-briefcase'></i>
                        <p><?php echo $role ?></p>
                    </div>
                    <div class="inner_container">
                        <div class="map">
                            <i class='bx bxs-send'></i>
                            <a href="/Root/Chats1.2/inbox_list.php">Messages</a>
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
                    <p>Occupation</p>
                </div>
                <div class="primary">
                    <h1><?php echo $user_job ?></h1>
                </div>
            </div>
        </div>

        <div class="right_portion">
            <div class="plate">
                <h1 class="heading">Basic Informations </h1>
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
                            <label>Full Name :</label>
                            <input placeholder="<?php echo $user_name ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Gender :</label>
                            <input placeholder="<?php echo $user_gender ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Date of Birth :</label>
                            <input placeholder="<?php echo $user_birth ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>NID Number :</label>
                            <input placeholder="<?php echo $user_NID ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Since  :</label>
                            <input placeholder="<?php echo $acc_join_date ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Contact Number :</label>
                            <input placeholder="<?php echo $user_contact ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Web Site :</label>
                            <input placeholder="<?php echo $user_website ?>" disabled>
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



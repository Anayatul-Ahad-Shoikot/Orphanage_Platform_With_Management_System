<?php
    include("/xampp/htdocs/Projects/Backend_Code/o_profileDetails.php");
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
    <title>CareSenerity.org | Org Profile</title>
</head>

<body>
    <header class="header">
      <nav>
        <div class="logo">
          <a href="/Frontend_code/HomePage/o_homePage.php"><img src="/Img/LOGO_NoBackground.png" alt="LOGO"></a>
        </div>
        
        <div class="links">
          <ul>
            <li><a href="/Frontend_code/HomePage/o_homePage.php">Home</a></li>
            <li><a href="/Frontend_code/Organizations/o_orgPage.php">Orgs.</a></li>
            <li><a href="#">Donations</a></li>
            <li><a href="#">Adoption Rrequest</a></li>
            <li><a href="/Frontend_code/Dashboard/o_editProfilePage.php" class="edit_profile">Edit Profile</a></li>
          </ul>
        </div>
  
      </nav>
    </header>
    
    <div class="container">
        <div class="left_portion">
            <div class="userDetails1">
                <div class="profile">
                    <figure><img src= "/Backend_Code/<?php echo $logo ?>" alt="profile" width="250px" height="250px"></figure>
                </div>
                <div class="userDetails">
                    <div class="userName">
                        <h1><?php echo $orgname ?></h1>
                    </div>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <p><?php echo $location ?>, <?php echo $country ?></p>
                    </div>
                    <div class="map">
                        <i class='bx bxs-briefcase'></i>
                        <p><?php echo $acctype ?></p>
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
                    <p>Motive</p>
                </div>
                <div class="primary">
                    <h1><?php echo $vision ?></h1>
                    <p><?php echo $description ?></p>
                </div>
            </div>
        </div>

        <div class="options">
            <a href="#" class="btn x">Oldage</a>
            <a href="/Frontend_code/Orphanage/o_orphanPage.php" class="btn y">Orphanage</a>
        </div>


        <div class="right_portion">
            <div class="plate">
                <h1 class="heading">Basic Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>Org Name :</label>
                            <input placeholder="<?php echo $orgname ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>User Name :</label>
                            <input placeholder="<?php echo $username ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>User ID :</label>
                            <input placeholder="<?php echo $userid ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>User Email :</label>
                            <input placeholder="<?php echo $useremail ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Acc. Type :</label>
                            <input placeholder="<?php echo $acctype ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Established :</label>
                            <input placeholder="<?php echo $established ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Since :</label>
                            <input placeholder="<?php echo $since ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plate">
                <h1 class="heading">Contact Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>Phone :</label>
                            <input placeholder="<?php echo $phonecontact ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Email :</label>
                            <input placeholder="<?php echo $emailcontact ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Web Site :</label>
                            <input placeholder="<?php echo $website ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Address :</label>
                            <input placeholder="<?php echo $address ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

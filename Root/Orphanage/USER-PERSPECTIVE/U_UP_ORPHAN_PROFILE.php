<?php
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Orphanage/USER-PERSPECTIVE/UP_ORPHAN_PROFILE_BE.php");
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
    <link rel="stylesheet" href="/Root/Orphanage/ORPHAN_PROFILE_STYLE.css">
    <title>CareSenerity.org | Orphan Profile</title>
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
                <li><a href="/Root/Org_Page/U_ORG.php" class="active">Orgs.</a></li>
                <li><a href="/Root/Org_Page/U_ORG.php">Donate</a></li>
                <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>
    
    <div class="container">
        <div class="left_portion">
            <div class="userDetails1">
                <div class="profile">
                    <figure><img src= "../<?php echo $orphan_image ?>" alt="profile" width="250px" height="250px"></figure>
                </div>
                <div class="userDetails">
                    <div class="userName">
                        <h1><?php echo $first_name, " " ,$last_name ?></h1>
                    </div>
                    <div class="map">
                        <i class='bx bxs-briefcase'></i>
                        <p><?php echo $org_name ?></p>
                    </div>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <p><?php echo $org_location ?></p>
                    </div>
                </div>
            </div>
            <div class="work">
                <div class="tabs">
                    <i class='bx bxs-briefcase'></i>
                    <p>Local Gardian</p>
                </div>
                <div class="primary">
                    <h1><?php echo $guardian_name ?></h1>
                    <p><?php echo $guardian_contact ?></p>
                    <p><?php echo $guardian_location ?></p>
                </div>
            </div>
        </div>  
        <div class="options">
            <a href="/Root/D & A/Adoptions/U_TERMS_CONDITIONS.php?orphan_id=<?php echo $orphanId ?> " class="btn y">Adopt</a>
            <a href="/Root/D & A/Donations/U_DONATION_DASH_2.php?orphan_id=<?php echo $orphanId ?>" class="btn y">Gift</a>
        </div>


        <div class="right_portion">
            <div class="plate">
                <h1 class="heading">Basic Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>First Name :</label>
                            <input placeholder="<?php echo $first_name ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Last Name :</label>
                            <input placeholder="<?php echo $last_name ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Orphan ID :</label>
                            <input placeholder="<?php echo $orphanId ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Age :</label>
                            <input placeholder="<?php echo $age ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Gender :</label>
                            <input placeholder="<?php echo $gender ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Religion :</label>
                            <input placeholder="<?php echo $religion ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Date of Birth :</label>
                            <input placeholder="<?php echo $date_of_birth ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Since :</label>
                            <input placeholder="<?php echo $since ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Adoption Status :</label>
                            <?php
                                if($adoption_status == '1'){
                                    $adoption_status = 'Adopted';
                                } else {
                                    $adoption_status = 'Available';
                                }
                            ?>
                            <input placeholder="<?php echo $adoption_status ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plate">
                <h1 class="heading">Other Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>Family Status :</label>
                            <input placeholder="<?php echo $family_status ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Physical Condition :</label>
                            <input placeholder="<?php echo $physical_condition ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Education :</label>
                            <input placeholder="<?php echo $education_level ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Medical History :</label>
                            <input placeholder="<?php echo $medical_history ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Hobby :</label>
                            <input placeholder="<?php echo $hobby ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Favourite Foods :</label>
                            <input placeholder="<?php echo $favorite_food ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Favourite Game :</label>
                            <input placeholder="<?php echo $favorite_game ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Skills :</label>
                            <input placeholder="<?php echo $skills ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Dreams :</label>
                            <input placeholder="<?php echo $dreams ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Problems :</label>
                            <input placeholder="<?php echo $problems ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Comments :</label>
                            <input placeholder="<?php echo $other_comments ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
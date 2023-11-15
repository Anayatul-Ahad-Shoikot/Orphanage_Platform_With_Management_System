<?php
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Orphanage/ORPHAN_PROFILE_BE.php");
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
                <a href="/Root/Home_Page/O_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
                </div>
                <div class="links">
                <ul>
                    <li><a href="/Root/Home_Page/O_HOME.php">Home</a></li>
                    <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
                    <li><a href="#">Donations</a></li>
                    <li><a href="#">Adoption Rrequest</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php" class="edit_profile">Edit Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>
    
    <div class="container">
        <div class="left_portion">
            <div class="userDetails1">
                <div class="profile">
                    <figure><img src= "<?php echo $image_path ?>" alt="profile" width="250px" height="250px"></figure>
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
                        <p><?php echo $org_address ?></p>
                    </div>
                    <div class="inner_container">
                        <div class="map">
                            <i class='bx bxs-send'></i>
                            <p>Gift</p>
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
                    <p>Local Gardian</p>
                </div>
                <div class="primary">
                    <h1><?php echo $guardian_name ?></h1>
                    <p><?php echo $guardian_contact ?></p>
                    <p><?php echo $address ?></p>
                </div>
            </div>
        </div>  
        <div class="options">
            <a href="/Root/Orphanage/EDIT_ORPHAN_PROFILE.php?orphan_id=<?php echo $orphan_id ?>" class="btn x">Edit</a>
            <a href="/Root/Orphanage/ORPHAN_DASH.php" class="btn y">Orphanage</a>
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
                            <input placeholder="<?php echo $orphan_id ?>" disabled>
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
                            <label>Comments :</label>
                            <input placeholder="<?php echo $other_comments ?>" disabled>
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
                            <label>Favourite Games :</label>
                            <input placeholder="<?php echo $favorite_games ?>" disabled>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <link rel="stylesheet" href="fonts/remixicon.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="/Root/Orphanage/ORPHAN_DASH_STYLE.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>CareSenerity.org | Orphanage</title>
    </head>
    <body>
        <?php
            include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Orphanage/USER-PERSPECTIVE/UP_ORPHAN_DASH_BE.php");
        ?>
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
                    <div>
                        <img src= "../../Dashboards/Own-Profiles/Org/<?php echo $org_logo ?>" alt="profile" width="250px" height="250px">
                    </div>
                    <div class="userDetails">
                        <div class="userName">
                            <h1><?php echo $org_name ?></h1>
                        </div>
                        <div class="map">
                            <i class="ri-map-pin-fill ri"></i>
                            <p><?php echo $org_location ?></p>
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
            </div>
            
            <div class="options">
                <form action="#" method="GET">
                    <input type="text" name="query" placeholder="Search Child...">
                    <input type="hidden" name="org_id" value="<?php  echo $org_id ?>">
                    <button type="submit" class="btn"><i class="ri-search-line"></i></button>
                </form>
            </div>

            <div class="plate">
                <?php
                    if(isset($_GET['query'])){
                        include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Orphanage/USER-PERSPECTIVE/UP_SEARCH_ORPHAN_BE.php');
                    } else {
                        include ('/xampp/htdocs/DBMS_Project_Organized_One/Root/Orphanage/USER-PERSPECTIVE/FETCH_ORPHAN_CARD_BE.php');
                    }
                ?>
            </div>
        </div>
    </body>
</html>
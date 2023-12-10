<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <link rel="stylesheet" href="fonts/remixicon.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link rel="stylesheet" href="/Root/D & A/Donations/U_DONATION_DASH_STYLE.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>CareSenerity.org | D&A</title>
    </head>
    <body>
        <?php
            include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS_BE.php");
        ?>
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
                </ul>
                </div>
            </nav>
        </header>
        
        <div class="container">
            <div class="left_portion">
                <div class="userDetails1">
                    <div class="profile">
                        <figure><img src= "..//..//Dashboards/Own-Profiles/Org/<?php echo $logo_path ?>" alt="profile" width="250px" height="250px"></figure>
                    </div>
                    <div class="userDetails">
                        <div class="userName">
                            <h1><?php echo $org_name ?></h1>
                        </div>
                        <div class="map">
                            <i class="ri-map-pin-fill ri"></i>
                            <p><?php echo $location ?>, <?php echo $country ?></p>
                        </div>
                        <div class="map">
                            <i class='bx bxs-briefcase'></i>
                            <p><?php echo $acc_type ?></p>
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
                <a href="#" class="btn">button</a>
                <a href="#" class="btn">button</a>
                <form action="#" method="GET">
                    <input type="text" name="query" placeholder="Search Child">
                    <button type="submit" class="btn"><i class="ri-search-line"></i></button>
                </form>
            </div>

            <div class="box-info fst">
                <li>
                    <a href="#"><i class="fas fa-people-group"></i></a>
                    <span class="text">
                    <p>Received Donations</p>
                    <h3>156K $</h3>
                    </span>
                </li>
                <li>
                <a href="#"><i class="fas fa-people-group"></i></a>
                    <span class="text">
                    <p>Current Ammount</p>
                    <h3>96K $</h3>
                    </span>
                </li>
                <li>
                    <a href="#"><i class="fas fa-people-group"></i></a>
                    <span class="text">
                    <p>Adoption Request</p>
                    <h3>13</h3>
                    </span>
                </li>
            </div>

            <section class="donation-details">
                <h2>Donations Received</h2>
                <!-- Table displaying donation details -->
                <table class="donation-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>From</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Donation details will be populated here -->
                    </tbody>
                </table>
            </section>

            <section class="adoption-details">
                <h2>Adoption Requests</h2>
                <!-- Table displaying adoption requests -->
                <table class="adoption-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Adoption request details will be populated here -->
                    </tbody>
                </table>
            </section>
    </div>
</body>
</html>

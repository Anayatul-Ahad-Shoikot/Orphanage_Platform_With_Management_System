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
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="/Root//D & A//Org_donation_adoption//DON_ADOP_STYLE.css">
        <title>CareSenerity.org | D&A</title>
    </head>
    <body>
        <?php
            include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS_BE.php");
        ?>
        <header class="header">
            <nav>
                <div class="logo">
                <a href="/Root/Home_Page/U_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
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
                            <p><?php echo $org_location ?>, Bangladesh</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="options">
                <a href="#" class="btn">Add Child</a>
                <form action="#" method="GET">
                    <input type="text" name="query" placeholder="Search Child...">
                    <button type="submit" class="btn"><i class="ri-search-line"></i></button>
                </form>
            </div>
            <main>
                <div class="box-info fst">
                    <li>
                        <a href="/Root/Admin_Side//Dash/Orphans/ORPHAN_DASH.php"><i class="fas fa-people-group"></i></a>
                        <span class="text"><p>Totall Donation Amount</p><h3><?php echo 5000 ?></h3></span>
                    </li>
                    <li>
                        <a href="/Root/Admin_Side//Dash/Organizations/ORG_DASH.php"><i class="fas fa-people-group"></i></a>
                        <span class="text"><p>Donation Received</p><h3><?php echo 56 ?></h3></span>
                    </li>
                    <li>
                        <a href="/Root/Admin_Side/Dash/Users/USER_DASH.php"><i class="fas fa-people-group"></i></a>
                        <span class="text"><p>Adoption Requests</p><h3><?php echo 12 ?></h3></span>
                    </li>
                </div>
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Blogs</h3>
                            <i class="fas fa-search"></i>
                            <i class="fas fa-filter"></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>By</th>
                                    <th class="x">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Org_donation_adoption/FETCH_ADOPTION_REQUEST_BE.php');
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="todo">
                        <div class="head">
                            <h3>Todos</h3>
                            <i class="fas fa-plus"></i>
                            <i class="fas fa-filter"></i>
                        </div>
                        <ul class="todo-list">
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class="fas fa-ellipsis-vertical"></i>
                            </li>
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class="fas fa-ellipsis-vertical"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="fas fa-ellipsis-vertical"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="fas fa-ellipsis-vertical"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="fas fa-ellipsis-vertical"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>

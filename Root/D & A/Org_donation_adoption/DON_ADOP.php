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
        <link rel="stylesheet" href="/Root//D & A//Org_donation_adoption//DON_ADOP_STYLE.css">
        <title>CareSenerity.org | D&A</title>
    </head>
    <body>
        <?php
            include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS_BE.php");
            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Org_donation_adoption/FETCH_ADOPTION_REQUEST_BE.php');
            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Org_donation_adoption/FETCH_DONATIONS_BE.php');
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
                        <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php">Edit Profile</a></li>
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
                    <a href="#" class="btn">###</a>
                    <!-- <form action="#" method="GET">
                        <input type="text" name="query" placeholder="Search Child...">
                        <button type="submit" class="btn"><i class="ri-search-line"></i></button>
                    </form> -->
                </div>

                <main>
                    <div class="box-info fst">
                        <li>
                            <a href="#"><i class='bx bxs-dollar-circle bx-spin bx-rotate-180' ></i></a>
                            <span class="text"><p>Donation Received</p><h3><?php echo $total_amount_received ?></h3></span>
                        </li>
                        <li>
                            <a href="/Root/D & A/Org_donation_adoption/ORPHAN_AMOUNT_DASH.php"><i class='bx bx-dollar bx-tada' ></i></a>
                            <span class="text"><p>Donation for orphans</p><h3><?php echo $total_amount_received_by_orphans ?></h3></span>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxs-coin-stack bx-tada' ></i></a>
                            <span class="text"><p>Donation counts</p><h3><?php echo $total_donations ?></h3></span>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxs-user-plus bx-tada' ></i></a>
                            <span class="text"><p>Adoption Requests</p><h3><?php echo $total_adoptions ?></h3></span>
                        </li>
                    </div>
                    <div class="table-data">
                        <div class="order">
                            <div class="head">
                                <h3>Adoption Requests</h3>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Requested by</th>
                                        <th>Requested for</th>
                                        <th class="x">Action</th>
                                        <th>Process</th>
                                    </tr>
                                </thead>
                                <tbody">
                                    <?php
                                        foreach ($namesArray as $names) {
                                            echo '<tr>
                                                    <td>
                                                        <a href="/Root/Dashboards/Other-Profile/O_VIEW_USER_PROFILE.php?user_id=' . $names['user_id'] . '">' . $names['user_name'] . '</a>
                                                    </td>
                                                    <td>
                                                        <a href="/Root/Orphanage/ORPHAN_PROFILE.php?orphan_id=' . $names['orphan_id'] . '">' . $names['first_name'] . ' ' . $names['last_name'] . '</a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button onclick="toggleDropdown(this)" class="dropbtn">Actions</button>
                                                            <div id="myDropdown" class="dropdown-content">
                                                                <a href="/Root/D & A/Org_donation_adoption/VIEW_REQUEST_DETAILS.php?adoption_id=' . $names['adoption_id'] . '&user_name=' . $names['user_name'] . '&first_name=' . $names['first_name'] . '&last_name=' . $names['last_name'] . '">View</a>
                                                                <a href="/Root/D & A/Org_donation_adoption/ACCEPT_ADOPTION_REQUEST_BE.php?adoption_id=' .$names['adoption_id'] . '&user_id=' . $names['user_id'] . '&orphan_id='. $names['orphan_id'] .'">Accept</a>
                                                                <a href="reject?adoption_id="' .$names['adoption_id'] . '">Reject</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="' . ($names['status'] === 'done' ? 'done-status' : 'pending-status') . '">
                                                            ' . $names['status'] . '
                                                        </p>
                                                    </td>
                                                </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="todo">
                            <div class="head">
                                <h3>Donation Received</h3>
                            </div>
                            <ul class="todo-list">
                                <?php
                                    foreach ($resultArray as $row) {
                                        if ($row['receiver_type'] === 'organization') {
                                            echo '<li class="completed"><p>Donation Received ' . $row['amount'] . 'TK from <a href="/Root/Dashboards/Other-Profile/O_VIEW_USER_PROFILE.php?user_id=' . $row['user_id'] . '">' . $row['user_name'] . '</a></p></li>';
                                        } elseif ($row['receiver_type'] === 'orphan') {
                                            echo '<li class="not-completed"><p>' . $row['first_name'] . ' ' . $row['last_name'] . ' received ' . $row['amount'] . 'TK from <a href="/Root/Dashboards/Other-Profile/O_VIEW_USER_PROFILE.php?user_id=' . $row['user_id'] . '">' . $row['user_name'] . '</a></p></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </main>
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
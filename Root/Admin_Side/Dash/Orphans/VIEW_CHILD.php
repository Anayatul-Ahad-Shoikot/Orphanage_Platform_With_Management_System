<?php 
  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/ADMIN_DASH_BE.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/Root/Admin_Side/Dash/Organizations/ORG_DASH_STYLE.css" />
    <link rel="stylesheet" href="/Root/Admin_Side/Dash/Orphans/VIEW_STYLE.css">
    <title>orphans</title>
  </head>
  <body>
    <section class="sidebar">
      <a href="/Root/Admin_Side/Dash/ADMIN_DASH.php" class="logo">
        <img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="Logo" />
      </a>

      <ul class="side-menu top">
        <li class="active">
          <a href="/Root/Admin_Side/Dash/ADMIN_DASH.php" class="nav-link">
            <i class="fas fa-border-all"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-shopping-cart"></i>
            <span class="text">Website</span>
          </a>
        </li>
        <li>
          <a href="/Root/Admin_Side/Donation/DONATION_DASH.php" class="nav-link">
            <i class="fas fa-chart-simple"></i>
            <span class="text">Donations</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-message"></i>
            <span class="text">Message</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-people-group"></i>
            <span class="text">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="/Includes/logout.php" class="logout">
            <i class="fas fa-right-from-bracket"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>

    <section class="content">
      <nav>
        <i class="fas fa-bars menu-btn"></i>
        <!-- <a href="#" class="nav-link">Categories</a> -->
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="search..." />
            <button class="search-btn">
              <i class="fas fa-search search-icon"></i>
            </button>
          </div>
        </form>

        <input type="checkbox" hidden id="switch-mode" />
        <label for="switch-mode" class="switch-mode"></label>

        <a href="#" class="notification">
          <i class="fas fa-bell"></i>
          <span class="num">28</span>
        </a>

        <a href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php" class="profile">
          <img src="../Admin/<?php echo $admin_image ?>" alt="profile" />
        </a>
      </nav>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Organizations</h1>
                    <ul class="breadcrumb">
                            <li>
                                <a class="active" href="/Root/Admin_Side/Dash/ADMIN_DASH.php">Dashboard</a>
                            </li>
                            <li>></li>
                            <li>
                                <a class="active" href="/Root/Admin_Side//Dash/Orphans/ORPHAN_DASH.php">Orphans</a>
                            </li>
                            <li>></li>
                            <li>
                                <a class="active" href="#">Profile</a>
                            </li>
                        </ul>
                </div>

                <div class="ctn">
                    <form action="#" method="GET">
                        <input type="text" name="query" placeholder="Search Child">
                        <button type="submit" class="btn"><i class="ri-search-line"></i></button>
                    </form>
                </div>
            </div>

            <div class="container">
                <?php
                   include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Orphans/VIEW_BE.php');
                ?>
                <h2>Orphan Details</h2>
                <form action="/Root/Admin_Side/Dash/Orphans/VIEW_UPDATE_BE.php" method="post" enctype="multipart/form-data">

                    <!-- <img src="../../../Orphanage/<?php echo $orphan_image ?>" alt="picture"> -->
                    <div class="row">
                      <label>Orphan ID:</label>
                      <input type="text" name="orphan_id " placeholder="<?php echo $orphanId ?>" disabled>
                    </div>
                    <div class="row">
                      <label>Organization ID:</label>
                      <input type="number" name="org_id " placeholder="<?php echo $org_id ?>" disabled>
                    </div>
                    <div class="row">
                      <label>Organization Name:</label>
                      <input type="text" name="org_name " placeholder="<?php echo $org_name ?>" disabled>
                    </div>
                    <div class="row">
                      <label>First Name:</label>
                      <input type="text" name="first_name" placeholder="<?php echo $first_name ?>" >
                    </div>
                    <div class="row">
                      <label>Last Name:</label>
                      <input type="text" name="last_name" placeholder="<?php echo $last_name ?>" >
                    </div>
                    <div class="row">
                      <label>Age:</label>
                      <input type="number" name="age" placeholder="<?php echo $age ?>">
                    </div>
                    <div class="row">
                      <label>Since:</label>
                      <input type="number" name="Since" placeholder="<?php echo $since ?>">
                    </div>
                    <div class="row">
                      <label>Guardian Name:</label>
                      <input type="text" name="guardian_name" placeholder="<?php echo $guardian_name ?>" >
                    </div>
                    <div class="row">
                      <label>Guardian Contact:</label>
                      <input type="text" name="guardian_contact" placeholder="<?php echo $guardian_contact ?>" >
                    </div>
                    <div class="row">
                      <label>Guardian Location:</label>
                      <input type="text" name="guardian_location" placeholder="<?php echo $guardian_contact ?>" >
                    </div>
                    <div class="opt">
                        <div class="part">
                        <label>Gender :</label>
                        <select name="gender" >
                            <option value=""><?php echo $gender ?></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        </div>
                        <div class="part">
                        <label>Religion :</label>
                        <select name="religion" >
                            <option value=''><?php echo $religion ?></option>
                            <option value="muslim">Muslim</option>
                            <option value="hindu">Hindu</option>
                            <option value="cristian">Cristian</option>
                            <option value="buddha">Buddha</option>
                            <option value="other">Other</option>
                        </select>
                        </div>
                        <div class="part">
                        <label>Date of Birth :</label>
                        <input type="date" name="date_of_birth" placeholder="<?php echo $date_of_birth ?>">
                        </div>
                    </div>
                    <div class="opt">
                        <div class="part">
                            <label>Family Status :</label>
                            <select name="family_status" >
                                <option value=''><?php echo $family_status ?></option>
                                <option value="abondoned">Abondoned</option>
                                <option value="past Away">Past Away</option>
                                <option value="unknow">Unknow</option>
                                <option value="lost">Lost</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="part">
                            <label>Physical Condition :</label>
                            <select name="physical_condition" >
                                <option value=''><?php echo $physical_condition ?></option>
                                <option value="good">Good</option>
                                <option value="blind">Blind</option>
                                <option value="deaf">Deaf</option>
                                <option value="disabled">Disabled</option>
                                <option value="autistic">Autistic</option>
                                <option value="mad">Mad</option>
                            </select>
                        </div>
                        <div class="part">
                            <label>Education level:</label>
                            <select name="education_level" >
                                <option value=''><?php echo $education_level ?></option>
                                <option value="kindergarten">Kindergarten</option>
                                <option value="elementary">Elementary</option>
                                <option value="primary_school">Primary School</option>
                                <option value="junior_high_school">Junior High School</option>
                                <option value="senior_high_school">Senior High School</option>
                                <option value="secondary_school">secondary_school</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                      <label>Medical History:</label>
                      <input type="text" name="medical_history" placeholder="<?php echo $medical_history ?>">
                    </div>
                    <div class="row">
                      <label>Hobby:</label>
                      <input type="text" name="hobby"  placeholder="<?php echo $hobby ?>">
                    </div>
                    <div class="row">
                      <label>Favourite Food:</label>
                      <input type="text" name="favorite_food" placeholder="<?php echo $favorite_food ?>">
                    </div>
                    <div class="row">
                      <label>Favourite Games:</label>
                      <input type="text" name="favorite_game" placeholder="<?php echo $favorite_game ?>">
                    </div>
                    <div class="row">
                      <label>Skills:</label>
                      <input type="text" name="skills" placeholder="<?php echo $skills ?>">
                    </div>
                    <div class="row">
                      <label>Dreams:</label>
                      <input type="text" name="dreams" placeholder="<?php echo $dreams ?>">
                    </div>
                    <div class="row">
                      <label>Problems:</label>
                      <input type="text" name="problems" placeholder="<?php echo $problems ?>">
                    </div>
                    <div class="row">
                      <label>Comments:</label>
                      <input  type="text" name="other_comments" placeholder="<?php echo $other_comments ?>">
                    </div>
                    <label>Image:</label>
                    <input type="file" name="image" accept="image/*">
                    <input type="hidden" name="orphan_id" value="<?php echo $orphan_id ?>">
                    <div class="btn">
                        <button type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>
        </main>
    </section>


    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
  </body>
</html>
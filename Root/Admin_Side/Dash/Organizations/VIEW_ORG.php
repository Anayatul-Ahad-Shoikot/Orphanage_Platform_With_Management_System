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
      <a href="#" class="logo">
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

        <a href="#" class="profile">
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
                                <a class="active" href="/Root/Admin_Side//Dash/Organizations/ORG_DASH.php">Organizations</a>
                            </li>
                            <li>></li>
                            <li>
                                <a class="active" href="#">Profile</a>
                            </li>
                        </ul>
                </div>

                <!-- <div class="ctn">
                    <form action="#" method="GET">
                        <input type="text" name="query" placeholder="Search Child">
                        <button type="submit" class="btn"><i class="ri-search-line"></i></button>
                    </form>
                </div> -->
            </div>

            <div class="container">
                <?php
                    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Organizations/VIEW_ORG_BE.php");
                ?>
                <h2>Profile</h2>
                <form action="/Root/Admin_Side/Dash/Organizations/VIEW_UPDATE_BE.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <label>User ID :</label>
                        <input type="text" name="acc_id" placeholder="<?php echo $acc_id ?>" disabled>
                    </div>
                    <div class="row">
                        <label>User Name :</label>
                        <input type="text" name="acc_name" placeholder="<?php echo $acc_name ?>" disabled>
                    </div>
                    <div class="row">
                        <label>User Email :</label>
                        <input type="text" name="acc_email" placeholder="<?php echo $acc_email ?>" disabled>
                    </div>
                    <div class="row">
                        <label>Account Type :</label>
                        <input type="text" name="role" placeholder="<?php echo $role ?>" disabled>
                    </div>
                    <div class="row">
                        <label>Since :</label>
                        <input type="text" name="acc_join_date" placeholder="<?php echo $acc_join_date ?>" disabled>
                    </div>
                    <div class="row">
                        <label>Organization's Name :</label>
                        <input type="text" name="org_name" placeholder="<?php echo $org_name ?>" disabled>
                    </div>
                    <div class="row">
                        <label>Established Date :</label>
                        <input type="date" name="established" value="<?php echo $established ?>">
                    </div>
                    <div class="row">
                        <label>Description :</label>
                        <input type="text" name="org_description" placeholder="<?php echo $org_description ?>" >
                    </div>
                    <div class="row">
                        <label>Organization's Email :</label>
                        <input type="text" name="org_email" placeholder="<?php echo $org_email ?>">
                    </div>
                    <div class="row">
                        <label>Organization Contact :</label>
                        <input type="text" name="org_phone" placeholder="<?php echo $org_phone ?>" >
                    </div>
                    <div class="row">
                        <label>Orgamization's Address :</label>
                        <input type="text" name="org_location" placeholder="<?php echo $org_location ?>" >
                    </div>
                    <div class="row">
                        <label>Organization's Website :</label>
                        <input type="text" name="org_website" placeholder="<?php echo $org_website ?>" >
                    </div>
                    <div class="row">
                        <label>Vision :</label>
                        <input type="text" name="org_vision"  placeholder="<?php echo $org_vision ?>">
                    </div>
                    <label>Orginization's Logo :</label>
                    <input type="file" name="image" accept="image/*">
                    <input type="hidden" name="org_id" value="<?php echo $org_id ?>">
                    <div class="btn">
                        <button type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>

            <div class="container_2">
                <div class="left">
                    <h1>Orphans</h1>
                </div>
                <div class="plate">
                    <?php 
                        include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Organizations/FETCH_ORPHAN_FROM_ORG_BE.php');
                    ?>
                </div>
            </div>
        </main>
    </section>
    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
  </body>
</html>
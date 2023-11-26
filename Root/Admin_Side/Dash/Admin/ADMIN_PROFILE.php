<?php 
  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE_BE.php');
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
    <link rel="stylesheet" href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE_STYLE.css" />
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
          <img src="<?php echo $img ?>" alt="profile" />
        </a>
      </nav>

      <main>
        <div class="head-title">
            <div class="left">
                <h1>Admin</h1>
                <ul class="breadcrumb">
                  <li>
                    <a class="active" href="/Root/Admin_Side/Dash/ADMIN_DASH.php">Dashboard</a>
                  </li>
                  <li>></li>
                  <li>
                    <a class="active" href="#">Admin Profile</a>
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
          <div class="box st st">
              <?php
                  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Admin/FETCH_ADMINS.php');
              ?>
          </div>
          <div class="box st">
                <h1>My Deteails</h1>
              <div>
                  <img src="<?php echo $img ?>" alt="User Image">
              </div>
              <form action="/Root/Admin_Side/Dash/Admin/UPDATE_ADMIN_BE.php" method="POST" enctype="multipart/form-data">
                  <input type="text" name="user_name" placeholder="<?php echo $user_name ?>" disabled>
                  <input type="text" name="user_email" placeholder="<?php echo $user_email ?>">
                  <input type="text" name="contact" placeholder="<?php echo $contact ?>">
                  <input type="text" name="priyority" placeholder="<?php echo $priyority ?>" disabled>
                  <input type="text" name="since" placeholder="<?php echo $since ?>" disabled>
                  <input type="file" name="image" accept="image/*">
                  <button type="submit" name="submit1">Update</button>
              </form>
          </div>
          <div class="box nd">
            <h1>Add Admin</h1>
            <div>
              <form action="/Root/Admin_Side/Dash/Admin/NEW_ADDMIN_BE.php" method="POST" enctype="multipart/form-data">
                  <input type="text" name="user_name" placeholder="Admin Name" required>
                  <input type="text" name="user_email" placeholder="Admin Email" required>
                  <input type="text" name="contact" placeholder="contact number" required>
                  <input type="text" name="priyority" placeholder="Set priyority" required>
                  <input type="password" name="user_pass" placeholder="Password" required>
                  <input type="password" name="con_pass" placeholder="Confirm Password" required>
                  <input type="password" name = "Admin_pass" placeholder="Enter Your Password" required>
                  <input type="file" name="image" accept="image/*">
                  <button type="submit" name="submit2">Add</button>
              </form>
            </div>
          </div>
        </div>
      </main>

    </section>
    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
  </body>
</html>

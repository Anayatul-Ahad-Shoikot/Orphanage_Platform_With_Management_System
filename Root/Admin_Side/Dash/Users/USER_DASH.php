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
    <link rel="stylesheet" href="/Root/Admin_Side/Dash/Orphans/ORPHAN_DASH_STYLE.css" />
    <title>orphans</title>
  </head>
  <body>
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
  <section class="sidebar">
      <a href="/Root/Admin_Side/Dash/ADMIN_DASH.php" class="logo">
        <img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="Logo" />
      </a>
      <ul class="side-menu top">
        <li  class="active">
          <a href="/Root/Admin_Side/Dash/ADMIN_DASH.php" class="nav-link">
            <i class="fas fa-border-all"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/Root/Admin_Side/website/HOME.php" class="nav-link">
            <i class="fa fa-globe"></i>
            <span class="text">Website</span>
          </a>
        </li>
        <li>
          <a href="/Root/Admin_Side/Donation/DONATION_DASH.php" class="nav-link">
          <i class="fa fa-usd"></i>
            <span class="text">Donations</span>
          </a>
        </li>
        <li>
          <a href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php" class="nav-link">
            <i class="fas fa-people-group"></i>
            <span class="text">Team</span>
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
        <form action="#" style="visibility: hidden;">
          <div class="form-input">
            <input type="search" placeholder="search..." />
            <button class="search-btn">
              <i class="fas fa-search search-icon"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" hidden id="switch-mode" />
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="profile">
          <img src="../Admin/<?php echo $admin_image ?>" alt="profile" />
        </a>
      </nav>

      <main>
        <div class="head-title">
            <div class="left">
                <h1>Users</h1>
                <ul class="breadcrumb">
                  <li>
                    <a class="active" href="/Root/Admin_Side/Dash/ADMIN_DASH.php">Dashboard</a>
                  </li>
                  <li>></li>
                  <li>
                    <a class="active" href="/Root/Admin_Side/Dash/Users/USER_DASH.php">Users</a>
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

        <div class="plate">
            <?php 
            if (isset($_GET['query'])){
                include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Users/SEARCH_BE.php');
            } else {
                include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Users/FETCH_USERS_BE.php');
            }
            ?>
        </div>
      </main>
    </section>


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
    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
  </body>
</html>

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
        <li>
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
        <li class="active">
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
          <img src="<?php echo $admin_image ?>" alt="profile" />
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

            <div class="ctn" style="visibility: hidden;">
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
                  <img src="<?php echo $admin_image ?>" alt="User Image">
              </div>
              <form action="/Root/Admin_Side/Dash/Admin/UPDATE_ADMIN_BE.php" method="POST" enctype="multipart/form-data">
                  <input type="text" name="admin_name" placeholder="<?php echo $admin_name ?>">
                  <input type="text" name="acc_email" placeholder="<?php echo $acc_email ?>">
                  <input type="text" name="admin_contact" placeholder="<?php echo $admin_contact ?>">
                  <input type="text" name="admin_priyority" placeholder="<?php echo $admin_priyority ?>" disabled>
                  <input type="text" name="acc_join_date" placeholder="<?php echo $acc_join_date ?>" disabled>
                  <input type="file" name="image" accept="image/*">
                  <button type="submit" name="submit1">Update</button>
              </form>
          </div>
          <div class="box nd">
            <h1>Add Admin</h1>
            <div>
              <form action="/Root/Admin_Side/Dash/Admin/NEW_ADDMIN_BE.php" method="POST" enctype="multipart/form-data">
                  <input type="text" name="acc_name" placeholder="Account Name" required>
                  <input type="text" name="admin_name" placeholder="Admin Name" required>
                  <input type="text" name="acc_email" placeholder="Admin Email" required>
                  <input type="text" name="admin_contact" placeholder="contact number" required>
                  <input type="text" name="admin_priyority" placeholder="Set priyority" required>
                  <input type="password" name="acc_pass" placeholder="Password" required>
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

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
    <link rel="stylesheet" href="/Root/Admin_Side/Donation/DONATION_DASH_STYLE.css" />
    <title>Admin Panel</title>
  </head>
  <body>
    <section class="sidebar">
      <a href="#" class="logo">
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
        <li  class="active">
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

        <a href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php" class="profile">
          <img src="../Dash/Admin/<?php echo $image ?>" alt="profile" />
        </a>
      </nav>

      <main>
      <div class="head-title">
          <div class="left">
            <h1>Donations</h1>
          </div>
        </div>
        <p>this is donation dash</p>
      </main>

    </section>

    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
</body>
</html>
<?php 
  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/ADMIN_DASH_BE.php');
  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/COUNTERS_BE.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="/Root/Admin_Side/Dash/ADMIN_DASH_STYLE.css" />
    <title>Admin Panel</title>
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
          <a href="/Root/Admin_Side/website/HOME.php" class="nav-link">
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
          <a href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php" class="nav-link">
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
        <nav class="e">
          <i class="fas fa-bars menu-btn"></i>
            <form action="#">
              <div class="form-input">
                  <input type="search" placeholder="search..." />
                  <button class="search-btn"><i class="fas fa-search search-icon"></i></button>
              </div>
          </form>
          <input type="checkbox" hidden id="switch-mode" />
          <label for="switch-mode" class="switch-mode"></label>

          <a href="#" class="notification">
            <i class="fas fa-bell"></i>
            <span class="num">4</span>
          </a>
          <a href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php" class="profile">
            <img src="Admin/<?php echo $admin_image ?>" alt="profile" />
          </a>
        </nav>



      <main>

          <div class="head-title">
              <div class="left">
                  <h1>Dashboard</h1>
              </div>
              <a href="#" class="download-btn">
                  <i class="fas fa-cloud-download-alt"></i>
                  <span class="text">Download Report</span>
              </a>
          </div>

        <div class="box-info fst">
          <li>
            <a href="/Root/Admin_Side//Dash/Orphans/ORPHAN_DASH.php"><i class="fas fa-people-group"></i></a>
            <span class="text">
              <p>Orphans</p>
              <h3><?php echo $totalOrphans ?></h3>
            </span>
          </li>
          <li>
            <a href="/Root/Admin_Side//Dash/Organizations/ORG_DASH.php"><i class="fas fa-people-group"></i></a>
            <span class="text">
              <p>Organizations</p>
              <h3><?php echo $totalOrgs ?></h3>
            </span>
          </li>
          <li>
            <a href="/Root/Admin_Side/Dash/Users/USER_DASH.php"><i class="fas fa-people-group"></i></a>
            <span class="text">
              <p>Users</p>
              <h3><?php echo $totalusers ?></h3>
            </span>
          </li>
        </div>

        <div class="box-info sec">
          <li>
            <a href="#"><i class="fas fa-calendar-check"></i></a>
            <span class="text">
              <p>Old</p>
              <h3>1.5K</h3>
            </span>
          </li>
          <li>
            <a href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php"><i class="fas fa-people-group"></i></a>
            <span class="text">
              <p>Admins</p>
              <h3><?php echo $totaladmins ?></h3>
            </span>
          </li>
          <li>
            <i class="fas fa-calendar-check"></i>
            <span class="text">
              <p>Accounts</p>
              <h3>1.5K</h3>
            </span>
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
                include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Post_Tab/FETCH_POST_BE.php');
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

    </section>

    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
  </body>
</html>
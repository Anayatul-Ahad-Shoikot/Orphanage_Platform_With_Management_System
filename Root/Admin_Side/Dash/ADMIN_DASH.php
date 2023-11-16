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
        <a href="#" class="nav-link">Categories</a>
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
          <img src="<?php echo $image ?>" alt="profile" />
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
            <i class="fas fa-people-group"></i>
            <span class="text">
              <p>Total Orphans</p>
              <h3><?php echo $totalOrphans ?></h3>
            </span>
          </li>
          <li>
            <i class="fas fa-people-group"></i>
            <span class="text">
              <p>Total Organizations</p>
              <h3><?php echo $totalOrgs ?></h3>
            </span>
          </li>
          <li>
            <i class="fas fa-people-group"></i>
            <span class="text">
              <p>Total Users</p>
              <h3><?php echo $totalusers ?></h3>
            </span>
          </li>
        </div>

        <div class="box-info sec">
          <li>
            <i class="fas fa-calendar-check"></i>
            <span class="text">
              <p>Total Old</p>
              <h3>1.5K</h3>
            </span>
          </li>
          <li>
            <i class="fas fa-people-group"></i>
            <span class="text">
              <p>Total Admins</p>
              <h3><?php echo $totaladmins ?></h3>
            </span>
          </li>
          <li class="hideee">
            <i class="fas fa-calendar-check"></i>
            <span class="text">
              <p>Total Old</p>
              <h3>1.5K</h3>
            </span>
          </li>
        </div>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Recent Orders</h3>
              <i class="fas fa-search"></i>
              <i class="fas fa-filter"></i>
            </div>

            <table>
              <thead>
                <tr>
                  <th>User</th>
                  <th>Order Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="profile.png" alt="" />
                    <p>User Name</p>
                  </td>
                  <td>07-05-2023</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.png" alt="" />
                    <p>User Name</p>
                  </td>
                  <td>07-05-2023</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.png" alt="" />
                    <p>User Name</p>
                  </td>
                  <td>07-05-2023</td>
                  <td><span class="status process">Process</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.png" alt="" />
                    <p>User Name</p>
                  </td>
                  <td>07-05-2023</td>
                  <td><span class="status process">Process</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="profile.png" alt="" />
                    <p>User Name</p>
                  </td>
                  <td>07-05-2023</td>
                  <td><span class="status complete">Complete</span></td>
                </tr>
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
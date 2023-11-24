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
    <link rel="stylesheet" href="/Root/Admin_Side/Dash/Users/USER_DASH_STYLE.css" />
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
            <span class="text">My Store</span>
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
          <img src="../Admin/<?php echo $image ?>" alt="profile" />
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
							<a class="active" href="#">Users</a>
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
            <table>
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>User Name</th>
                        <th>User Password</th>
                        <th>User Email</th>
                        <th>Account Type</th>
                        <th>Since</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if (isset($_GET['query'])){
                            include('');
                        } else {
                            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/Users/FETCH_USERS_BE.php');
                        }
                    ?>
                </tbody>
            </table>
        </div>
      </main>

    </section>

    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
</body>
</html>
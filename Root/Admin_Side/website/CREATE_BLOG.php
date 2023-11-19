<?php 
  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/ADMIN_DASH_BE.php');
  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/Dash/COUNTERS_BE.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="/Root/Admin_Side/website/HOME_STYLE.css" />
    <link rel="stylesheet" href="/Root/Admin_Side/Dash/ADMIN_DASH_STYLE.css" />
    <title> Admin | HomePage </title>
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
        <li class="active">
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
        <nav class="e">
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
            <img src="..//..//Dash//<?php echo $image ?>" alt="profile" />
            </a>
        </nav>
        <main>
        <header class="header">
                <nav class="y">
                    <div class="logo">
                        <a href="/Root/Admin_Side/website/HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
                    </div>
                    <div class="links">
                        <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Orgs.</a></li>
                        <li><a href="/Includes/logout.php" class="btn">LogOut</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <div class="container-1">
            <h1>Create a Blog Post</h1>
            <form action="/Root/Blog/UPLOADS_BLOG_BE.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Title" required>
                <textarea name="content" required placeholder="Content"></textarea>
                <div class="xxx">
                <select name="category">
                  <option value="">Category</option>
                    <option value="child">Child</option>
                    <option value="old">Old</option>
                </select>
                <input class="img" type="file" name="img" accept="image/*">
                </div>
                <button type="submit" name="submit">Post</button>
            </form>
        </div>
        </main>
    </section>
</body>
</html>
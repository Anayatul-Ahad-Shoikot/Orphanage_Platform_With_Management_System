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
        <li class="active">
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
        <nav class="e">
            <i class="fas fa-bars menu-btn"></i>
            <form action="#">
            <div class="form-input" style="visibility: hidden;">
                <input type="search" placeholder="search..." />
                <button class="search-btn">
                <i class="fas fa-search search-icon"></i>
                </button>
            </div>
            </form>

            <input type="checkbox" hidden id="switch-mode" />
            <label for="switch-mode" class="switch-mode"></label>

            <a href="/Root/Admin_Side/Dash/Admin/ADMIN_PROFILE.php" class="profile">
            <img src="../Dash/Admin/<?php echo $admin_image ?>" alt="profile" />
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

            <div class="section__container header__container">
                <h1>Join Us in Making Lives Better</h1>
                <p>
                A platform for Organizations. Stay connected with orphans and elderly to change lives with each click. 
                Spread kindness to all.
                </p>
                <form action="/" method="GET">
                <input type="text" name="query" placeholder="Search Orgs.">
                <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>

            </header>
            <div class="container">
                <div class="option">
                <h2><a href="/Root/Admin_Side/website/CREATE_BLOG.php">CreatePost</a></h2>
                </div>
                <?php 
                    include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Admin_Side/website/FETCH_BLOGS_BE.php');
                ?>
            </div> 
            <footer class="footer">
            <div class="section__container footer__container">
                <div class="footer__content">
                <h4>SUBSCRIBE TO GET THE LATEST NEWS</h4>
                <p>
                    We recommend you to subscribe to our page. Enter your email to
                    get our daily updates.
                </p>
                </div>
                <div class="footer__form">
                <form action="/">
                    <input type="text" placeholder="Enter your email" />
                    <button>Subscribe</button>
                </form>
                </div>
            </div>
            <div class="section__container footer__bar">
                <div class="footer__logo">
                <h4><a href="#">CareSerenity.ORG</a></h4>
                <p>Copyright © 2023 Web Design Mastery. All rights reserved.</p>
                </div>
                <ul class="footer__nav">
                <li class="footer__link"><a href="#">Partnership</a></li>
                <li class="footer__link"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            </footer>
        </main>
    </section>
    <script src="/LandingPage/main.js"></script>
    <script src="/Root/Admin_Side/Dash/ADMIN_DASH_JS.js"></script>
  </body>
</html>
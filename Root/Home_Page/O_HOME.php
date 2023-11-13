<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/Root/Home_Page/HOME_STYLE.css" />
    <title> CareSenerity.org | Home </title>
  </head>

  <body>
    <header class="header">
      <nav>
          <div class="logo">
            <a href="/Root/Home_Page/O_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
          </div>
          <div class="links">
            <ul>
            <li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php">Profile</a></li>
            <li><a href="#">Orgs.</a></li>
            <li><a href="#">Donations</a></li>
            <li><a href="#">Adoption Request</a></li>
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
          <h2><a href="/Root/Blog/O_CREATE_BLOG.php">CreatePost</a></h2>
        </div>
        <?php 
            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Blog/SHOW_BLOG_BE.php');
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
    <script src="/LandingPage/main.js"></script>
  </body>
</html>
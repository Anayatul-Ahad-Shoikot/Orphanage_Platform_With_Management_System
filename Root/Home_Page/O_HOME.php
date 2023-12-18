<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/Root/Home_Page/HOME_STYLE.css" />
    <link rel="stylesheet" href="/Notification_style.css">
    <title> CareSenerity.org | Home </title>
  </head>

  <body>
    <header class="header">
        <nav id="fixedNav">
            <div class="logo">
              <a href="/Root/Home_Page/O_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
            </div>
            <div class="links">
              <ul>
                <li><a href="/Root/Home_Page/O_HOME.php" class="active">Home</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php">Profile</a></li>
                <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
                <li><a href="/Root//Gallary//O_GALLERY_DASH.php">Gallery</a></li>
                <li><a href="/Includes/logout.php" class="btn">LogOut</a></li>
                <?php
                  include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
                  $acc_id = $_SESSION['acc_id'];
                  $fetchUnreadNotificationsQuery = "SELECT COUNT(*) as unread_count FROM notifications 
                                                    WHERE is_read = 0 AND org_id = (SELECT org_id FROM org_list WHERE acc_id = $acc_id)";
                  $unreadNotificationsResult = mysqli_query($con, $fetchUnreadNotificationsQuery);
                  $unreadCount = 0;
                  if ($unreadNotificationsResult) {
                      $unreadRow = mysqli_fetch_assoc($unreadNotificationsResult);
                      $unreadCount = $unreadRow['unread_count'];
                  }
                ?>
                <div class="icon" onclick="toggleNotifi()">
                    <img src="/Root/Home_Page/bell.png" alt=""><span style="background-color: <?php echo ($unreadCount > 0) ? 'red' : 'transparent'; ?>">00</span>
                </div>
                <div class="notifi-box" id="box">
                    <h2>Notifications</h2>
                    <div id="content">
                    <?php
                      include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Notifications/O_FETCH_NOTIFICATION_BE.php');
                    ?>
                    </div>
                </div>
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
    <script src="/LandingPage/main.js"></script>
    <script src="/Root/Notifications/Notification_POPUP.js"></script>
    <script src="/Root/Notifications/Notification_color.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var nav = document.getElementById('fixedNav');
            if (window.scrollY > 600) { 
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>

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
  </body>
</html>
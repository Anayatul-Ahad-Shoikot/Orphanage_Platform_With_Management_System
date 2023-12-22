<?php
  include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Landing_Page/INDEX_BE.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/Root/Landing_Page/INDEX_style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>CareSenerity.org | landing page</title>
  </head>
  <body>

    <header class="header">
      <nav>
          <div class="logo">
            <a href="/Root/Landing_Page/INDEX.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
          </div>
          <div class="links">
            <ul>
              <li><a href="/Root/Landing_Page/INDEX.php" class="active">Home</a></li>
              <li><a href="#">Donate</a></li>
              <li><a href="/Root/AboutUs_Page/ABOUTUS_PAGE.php">About Us</a></li>
              <li><a href="/Root/Login_Page/LOGIN_FORM.php" class="btn">LogIn</a></li>
            </ul>
          </div>
      </nav>

      <div class="section__container header__container">
        <h1>Join us to make Lives Better</h1>
        <p>
          A platform for Organizations. Stay connected with orphans and elderly to change lives with each click. 
          Spread kindness to all.
        </p>
      </div>

        <div class="row diag-ro" id="info_web">
              <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">There are over</p>
                    <h3 id="count"><?php echo $total_orphans ?></h3><p id="text">orphans to help</p>
                </div>
            </div>
            <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">We have total</p>
                    <h3 id="count"><?php echo $total_organizations ?></h3><p id="text">organizations</p>
                </div>
            </div>
            <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">We serverd over</p>
                    <h3 id="count"><?php echo $total_donation_Serverd ?></h3><p id="text">BDT as Donation</p>
                </div>
            </div>
        </div>
    </header>


    <div class="about-us" id="body_tag">
        <div class="container">
            <div class="session-title">
                <p>Help us to Achieve our Goal</p>
                <h1 id="highlight">Joining Hands, Changing Stories</h1>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                        <h4>Fostering Change, One Connection at a Time</h4>
                        <p>Welcome to our platform, a digital space dedicated to fostering connections between caring individuals, organizations, and those in need. We aim to create meaningful impacts by facilitating connections between generous donors and vulnerable members of our society.</p> <p>At <b>CareSenrenity.org</b>, our mission is to facilitate connections that matter. Through our intuitive interface, we enable organizations to reach out, support, and make a real difference in the lives of orphans and the elderly community members.</p> <p>Adopt an orphan, explore orphanages and organizations, extend support with donations to specific causes or children. View detailed profiles of orphans, post thoughts on orphanage situations, hunger, and more, accompanied by photos and comments. Share moments in the gallery, embrace the opportunity to adopt a child, and anticipate upcoming services for elderly individuals. Together, let's make a difference in the lives of the vulnerable.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/about_img.png" alt="">
                </div>
            </div>
        </div>
    </div>


      <div class="what-we-do big-padding container-fluid">
            <div class="container">
                <div class="section-title row">
                    <h2 id="highlight">What we Have?</h2>
                    <p>A platform for Organizations. Stay connected with orphans and elderly to change lives with each click. 
          Spread kindness to all.</p>
                </div>
                <div class="row mt-4 whd">
                    <div class="col-md-4 text-center mb-5" id="part">
                        <i class="bi fs-1 bi-egg-fried" id="icon_i"></i>
                        <h4 class="fs-6 fw-bold mt-3">RAISE FUND FOR ORGs</h4>
                        <p>Facilitate financial support for organizations, empowering them to achieve their noble goals.</p>
                    </div>
                      <div class="col-md-4 text-center mb-5" id="part">
                        <i class="bi fs-1 bi-house-door" id="icon_i"></i>
                        <h4 class="fs-6 fw-bold mt-3">Enabling Adoptions, Enriching Lives</h4>
                        <p>Empower life-changing adoptions, enriching lives for both adoptive parents and the adopted children.</p>
                    </div>
                    <div class="col-md-4 text-center mb-5" id="part">
                        <i class="bi fs-1 bi-currency-dollar" id="icon_i"></i>
                        <h4 class="fs-6 fw-bold mt-3">Dynamic Donation System</h4>
                        <p>A versatile donation system that allows seamless and flexible contributions to various causes and organizations.</p>
                    </div>
                    <div class="col-md-4 text-center mb-5" style="visibility: hidden;">
                        <i class="bi fs-1 text-primary bi-book-half"></i>
                        <h4 class="fs-6 fw-bold mt-3">EDUCATION FOR POOR CHILDREN</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                    </div>
                      
                      <div class="col-md-4 text-center mb-5" id="part">
                        <i class="bi fs-1 bi-building" id="icon_i"></i>
                        <h4 class="fs-6 fw-bold mt-3">Access to Orphanage for Everyone</h4>
                        <p>Ensure inclusive access to orphanages, making them accessible and reachable for everyone in need.</p>
                    </div>
                      <div class="col-md-4 text-center mb-5" style="visibility: hidden;">
                        <i class="bi fs-1 text-primary bi-heart-pulse"></i>
                        <h4 class="fs-6 fw-bold mt-3">MEDICAL FACILITIES</h4>
                        <p>Lorem ipsum dolor sit amet consectetur,  consectetur adipiscing elit. Sed ac accumsan adipisicing elit. Nulla hic deserunt facere et animi</p>
                    </div>
                </div>
            </div>
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


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  </body>
</html>
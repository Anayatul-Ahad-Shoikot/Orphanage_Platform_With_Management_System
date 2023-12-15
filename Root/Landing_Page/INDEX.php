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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> -->
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
            <a href="/Root//Landing_Page//INDEX.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
          </div>
          <div class="links">
            <ul>
              <li><a href="/Root//Landing_Page//INDEX.php" class="active">Home</a></li>
              <li><a href="#">Donate</a></li>
              <li><a href="/Root/AboutUs_Page/ABOUTUS_PAGE.php">About Us</a></li>
              <li><a href="/Root//Login_Page//LOGIN_FORM.php" class="btn">LogIn</a></li>
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
    </header>


    <div class="about-us">
        <div class="container">
            <div class="session-title">
                <p>Help us to Achieve our Goal</p>
                <h2>About Our Charity</h2>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                         <h4>BUILDING SCHOOL IN AFRICAN COMMUNITIES.</h4>
                        <p>Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien, eget tempor justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et . Fusce egestas volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit </p> <p> Amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at dapibus elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in, dapibus sapien. Praesent nec ornare risus. Etiam iaculis, ligula vel gravida vestibulum, urna justo posuere ante, id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus</p>
                    </div>
                    <div class="row diag-ro">
                        <div class="about-diag">
                            <div class="icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="tex">
                                <p>There are over</p>
                                <h3 id="count"><?php echo $total_orphans ?></h3><p>orphans to help</p>
                            </div>
                        </div>
                        <div class="about-diag">
                            <div class="icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="tex">
                                <p>We have total</p>
                                <h3 id="count"><?php echo $total_organizations ?></h3><p>organizations</p>
                            </div>
                        </div>
                        <div class="about-diag">
                            <div class="icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="tex">
                                <p>We serverd over</p>
                                <h3 id="count"><?php echo $total_donation_Serverd ?></h3><p>BDT All over the country</p>
                            </div>
                        </div>
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
                    <h2>What we do?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac accumsan ante. Proin ac lectus porttitor, pharetra lorem sit amet, euismod tortor. Donec blandit accumsan elit</p>
                </div>
                <div class="row mt-4 whd">
                    <div class="col-md-4 text-center mb-5">
                        <i class="bi text-primary fs-1 bi-egg-fried"></i>
                        <h4 class="fs-6 fw-bold mt-3">RAISE FUND FOR HEALTHY FOOD</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                    </div>
                      <div class="col-md-4 text-center mb-5">
                        <i class="bi fs-1 text-primary bi-house-door"></i>
                        <h4 class="fs-6 fw-bold mt-3">HUGE HELP TO HOMELESS PUPIL</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                    </div>
                      <div class="col-md-4 text-center mb-5">
                        <i class="bi fs-1 text-primary bi-book-half"></i>
                        <h4 class="fs-6 fw-bold mt-3">EDUCATION FOR POOR CHILDREN</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                    </div>
                      <div class="col-md-4 text-center mb-5">
                        <i class="bi fs-1 text-primary bi-currency-dollar"></i>
                        <h4 class="fs-6 fw-bold mt-3">MASSIVE DONATION TO POOR</h4>
                        <p>Lorem ipsum dolor sit amet consectetur,  consectetur adipiscing elit. Sed ac accumsan adipisicing elit. Nulla hic deserunt facere et animi</p>
                    </div>
                      <div class="col-md-4 text-center mb-5">
                        <i class="bi fs-1 text-primary bi-building"></i>
                        <h4 class="fs-6 fw-bold mt-3">LET'S BUILD SOME HOMES</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                    </div>
                      <div class="col-md-4 text-center mb-5">
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
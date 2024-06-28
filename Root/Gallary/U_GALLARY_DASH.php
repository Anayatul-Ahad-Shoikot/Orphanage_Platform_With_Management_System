<?php
    include("../Dashboards/Own-Profiles/User/PROFILE_DETAILS_BE.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/remixicon.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="/Root/Gallary/GALLARY_STYLE.css">
    <title>CareSenerity.org | Gallery</title>
</head>

<body>

    <header class="header">
      <nav>
        <div class="logo">
          <a href="/Root/Home_Page/U_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
        </div>
        <div class="links">
          <ul>
            <li><a href="/Root/Home_Page/U_HOME.php">Home</a></li>
            <li><a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php">Profile</a></li>
            <li><a href="/Root/Org_Page/U_ORG.php">Orgs.</a></li>
            <li><a href="/Root/Org_Page/U_ORG.php">Donate</a></li>
            <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
            <li><a href="/Root/Gallary/U_GALLARY_DASH.php" class="active">Gellary</a></li>
          </ul>
        </div>
      </nav>

        <div class="upload_form">
          <form action="UPLOADS.php" method="POST" enctype="multipart/form-data">
            <div class="part-1">
              <input type="text" name="img_title" class="form-control" placeholder="Image Title">
              <input type="file" name="image" class="form-control">
              <button type="submit" class="btn btn-success">Upload</button>
            </div>
            <div class="part-2">
              <h2>Share us your pictures</h2>
            </div>
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
        <div class="row">
            <div class='list-group gallery' style="width:100%;">
                <?php
                  include('FETCH_IMG_BE.php');
                ?>
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

    
    <script type="text/javascript">
      $(document).ready(function() {
          $(".fancybox").fancybox({
              openEffect: "none",
              closeEffect: "none",
          });
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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/Root/Org_Page/ORG_STYLE.css" />
    <title>CareSenerity.org | Orgs.</title>
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
              <li><a href="/Root/Org_Page/U_ORG.php" class="active">Orgs.</a></li>
              <!-- <li><a href="/Root/Org_Page/U_ORG.php">Donate</a></li> -->
              <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
              <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
            </ul>
          </div>
      </nav>
    </header>
    <div class="ctn">
      <form action="#" method="GET">
          <input type="text" name="query" placeholder="Search Organizations...">
          <button type="submit" class="btn"><i class="ri-search-line"></i></button>
      </form>
    </div>
    <div class="container">
      <?php 
          if (isset($_GET['query'])){
            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Org_Page/SEARCH_ORG_BE.php');
          } else {
            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Org_Page/ORG_BE.php');
          }
      ?>
    </div>
</body>
</html>
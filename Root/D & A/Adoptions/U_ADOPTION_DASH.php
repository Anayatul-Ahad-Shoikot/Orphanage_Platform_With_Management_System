<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <link rel="stylesheet" href="fonts/remixicon.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>CareSenerity.org | Adoption </title>
    <link rel="stylesheet" href="/Root/D & A/Adoptions/U_ADOPTION_DASH_STYLE.css">
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
                <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php" class="active">Adopt</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>
        <div>

        <div class="container">
            <div class="options">
                <form action="#" method="GET" id="neo">
                    <input type="hidden" name="query0" value="100">
                    <button type="submit" class="btn">Available Childs</i></button>
                </form>
                <form action="#" method="GET">
                    <input type="text" name="query" placeholder="Search Child...">
                    <button type="submit" class="btn"><i class="ri-search-line"></i></button>
                </form>
            </div>

            <div class="plate">
                <?php
                if (isset($_GET['query'])){
                    include('/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Adoptions/U_SEARCH_ORPHAN_DASH_BE.php');
                } elseif(isset($_GET['query0'])){
                    include('/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Adoptions/U_AVAILABLE_ORPHAN_BE.php');
                } else {
                    include ('/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Adoptions/U_ADOPTION_DASH_BE.php');
                }
                ?>
            </div>
        </div>
        </div>
        <script>
            function showUserConfirmation() {
            document.querySelector('.orphan-profiles').style.display = 'none';
            document.querySelector('.user-confirmation').style.display = 'block';
            }

            function showTermsAndConditions() {
            document.querySelector('.user-confirmation').style.display = 'none';
            document.querySelector('.terms-conditions').style.display = 'block';
            }

            function submitAdoptionRequest() {
            // Perform form submission actions or redirect to form submission page
            // Redirect to the next step in the adoption process
            // Example: window.location.href = 'form_submission.html';
            }
        </script>
    </body>
</html>

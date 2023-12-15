<?php
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Org_donation_adoption/VIEW_REQUEST_DETAILS_BE.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <link rel="stylesheet" href="fonts/remixicon.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="/Root/D & A//Org_donation_adoption//VIEW_REQUEST_DETAILS_STYLE.css">
        <title>CareSenerity.org | Orphan Profile</title>
    </head>

    <body>
        <header class="header">
                <nav>
                    <div class="logo">
                    <a href="/Root/Home_Page/U_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
                    </div>
                    <div class="links">
                    <ul>
                        <li><a href="/Root/Home_Page/O_HOME.php">Home</a></li>
                        <li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php" class="active">Profile</a></li>
                        <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
                        <li><a href="/Root//Gallary//O_GALLERY_DASH.php">Gallery</a></li>
                        <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php">Edit Profile</a></li>
                    </ul>
                    </div>
                </nav>
            </header>
        
        <div class="container">
            <div class="img">
                <div class="im1">
                    <img src="../../Dashboards/Own-Profiles/User/<?php echo $aplicant_image ?>" alt="" width="250px" height="250px">
                </div>
                <div class="im1">
                    <img src="../../Orphanage/<?php echo $orphan_image ?>" alt="" width="250px" height="250px">
                </div>
            </div>

            <div class="img">
                <div class="name">
                    <h4><?php echo $user_name ?></h4>
                </div>
                <div class="name">
                    <h4><?php echo $first_name, ' ' ,$last_name ?></h4>
                </div>
            </div>
            <h2>Adoption Application Form</h2>
            <form action="#" method="POST">
                <div class="part">
                    <label>Requested At:</label>
                    <input type="text" placeholder="<?php echo $request_date ?>" disabled>
                    <label>Adoption Process:</label>
                    <input type="text" placeholder="<?php echo $status ?>" disabled>
                    <label>Applicant's Email:</label>
                    <input type="text" placeholder="<?php echo $email ?>" disabled>
                    <label>Applicant's Phone Number:</label>
                    <input type="text" placeholder="<?php echo $phone ?>" disabled>
                    <label>Applicant's Occupation:</label>
                    <input type="text" placeholder="<?php echo $occupation ?>" disabled>
                    <label>Applicant's Annual Income:</label>
                    <input type="text" placeholder="<?php echo $income ?>" disabled>
                </div>
                <div class="part">
                    <label>Applicant's Marital Status:</label>
                    <input type="text" placeholder="<?php echo $maritalStatus ?>" disabled>
                    <label>Reason for Adoption:</label>
                    <input type="text" placeholder="<?php echo $reason ?>" disabled>
                    <label>Applicant's Current Children (if any):</label>
                    <input type="text" placeholder="<?php echo $children ?>" disabled>
                    <label>Description of Living Environment:</label>
                    <input type="text" placeholder="<?php echo $livingEnvironment ?>" disabled>
                    <label>Expectations as Adoptive Parents:</label>
                    <input type="text" placeholder="<?php echo $expectations ?>" disabled>
                    <label>Additional Information:</label>
                    <input type="text" placeholder="<?php echo $additionalInfo ?>" disabled>
                </div>
            </form>
        </div>
    </body>
</html>
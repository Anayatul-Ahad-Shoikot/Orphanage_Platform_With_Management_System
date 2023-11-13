<?php
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS_BE.php");
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
    <link rel="stylesheet" href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE_STYLE.css">
    <title> CareSenerity.org | Edit Profile </title>
</head>

<body>
    <header class="header">
        <nav>
            <div class="logo">
                <a href="/Root/Home_Page/O_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="/Root/Home_Page/O_HOME.php">Home</a></li>
                    <li><a href="#">Orgs.</a></li>
                    <li><a href="#">Donations</a></li>
                    <li><a href="#">Adoption Rrequest</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php" class="edit_profile">Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>   
    <div class="container">
        <h2>Edit Profile</h2>
        <form action="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE_BE.php" method="post" enctype="multipart/form-data">
                
            <input type="text" name="org_name" placeholder="Organization's Name :" >
            <input type="text" name="description" placeholder="Description :" >
            <input type="text" name="contact_email" placeholder="Organization's Email :">
            <input type="text" name="contact_phone" placeholder="Organization Contact :" >
            <input type="text" name="address" placeholder="Orgamization's Address :" >
            <input type="text" name="website" placeholder="Organization's Website :" >
            <input type="text" name="location" placeholder="Area :">
            <input type="text" name="mission_and_vision"  placeholder="Vision :">
            <input type="text" name="country" placeholder="Country :">
            <div class="opt">
                <div class="part">
                    <label>Orginization's Logo :</label>
                    <input type="file" name="image" accept="image/*">
                </div>
                <div class="part">
                    <label>Established At :</label>
                    <input type="date" name="established_date" >
                </div>
            </div>
            <div class="btn">
                <button type="submit" name="update">Update</button>
            </div>
        </form>
    </div>
</body>
</html>

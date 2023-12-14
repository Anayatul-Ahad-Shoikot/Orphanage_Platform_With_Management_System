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
                    <li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php">Profile</a></li>
                    <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
                    <li><a href="/Root//Gallary//O_GALLERY_DASH.php">Gallery</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php" class="active">Edit Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>   
    <div class="container">
        <h2>Edit Profile</h2>
        <form action="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE_BE.php" method="post" enctype="multipart/form-data">
            <label>Organization's Name :</label>
            <input type="text" name="org_name" placeholder="<?php echo $org_name ?>" >
            <label>Description :</label>
            <input type="text" name="org_description" placeholder="<?php echo $org_description ?>" >
            <label>Organization's Email :</label>
            <input type="text" name="org_email" placeholder="<?php echo $org_email ?>">
            <label>Organization Contact :</label>
            <input type="text" name="org_phone" placeholder="<?php echo $org_phone ?>" >
            <label>Orgamization's Address :</label>
            <input type="text" name="org_location" placeholder="<?php echo $org_location ?>" >
            <label>Organization's Website :</label>
            <input type="text" name="org_website" placeholder="<?php echo $org_website ?>" >
            <label>Vision :</label>
            <input type="text" name="org_vision"  placeholder="<?php echo $org_vision ?>">
            <div class="opt">
                <div class="part">
                    <label>Orginization's Logo :</label>
                    <input type="file" name="image" accept="image/*">
                </div>
                <div class="part">
                    <label>Established At :</label>
                    <input type="date" name="established" >
                </div>
            </div>
            <div class="btn">
                <button type="submit" name="update">Update</button>
            </div>
        </form>
    </div>
</body>
</html>

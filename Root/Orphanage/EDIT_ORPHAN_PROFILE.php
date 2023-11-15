<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <link rel="stylesheet" href="fonts/remixicon.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="/Root/Orphanage/ADD_ORPHAN_STYLE.css">
        <title>CareSenerity.org | Edit Child Profile</title>
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
                    <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
                    <li><a href="#">Donations</a></li>
                    <li><a href="#">Adoption Rrequest</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php" class="edit_profile">Edit Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>  

        <div class="container">
            <?php
                include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Orphanage/ORPHAN_PROFILE_BE.php');
            ?>
            <h2>Register New Orphan</h2>
            <form action="/Root/Orphanage/EDIT_ORPHAN_PROFILE_BE.php" method="post" enctype="multipart/form-data">
                
                <label>First Name:</label>
                <input type="text" name="first_name" placeholder="<?php echo $first_name ?>" >
                <label>Last Name:</label>
                <input type="text" name="last_name" placeholder="<?php echo $last_name ?>" >
                <label>Age:</label>
                <input type="number" name="age" placeholder="<?php echo $age ?>">
                <label>Address:</label>
                <input type="text" name="address" placeholder="<?php echo $address ?>" >
                <label>Guardian Name:</label>
                <input type="text" name="guardian_name" placeholder="<?php echo $guardian_name ?>" >
                <label>Guardian Contact:</label>
                <input type="text" name="guardian_contact" placeholder="<?php echo $guardian_contact ?>" >
                <div class="opt">
                    <div class="part">
                    <label>Gender :</label>
                    <select name="gender" >
                        <option value=""><?php echo $gender ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    </div>
                    <div class="part">
                    <label>Religion :</label>
                    <select name="religion" >
                        <option value=''><?php echo $religion ?></option>
                        <option value="muslim">Muslim</option>
                        <option value="hindu">Hindu</option>
                        <option value="cristian">Cristian</option>
                        <option value="buddha">Buddha</option>
                        <option value="other">Other</option>
                    </select>
                    </div>
                    <div class="part">
                    <label>Date of Birth :</label>
                    <input type="date" name="date_of_birth" placeholder="<?php echo $date_of_birth ?>">
                    </div>
                </div>

                <div class="opt">
                    <div class="part">
                        <label>Family Status :</label>
                        <select name="family_status" >
                            <option value=''><?php echo $family_status ?></option>
                            <option value="abondoned">Abondoned</option>
                            <option value="past Away">Past Away</option>
                            <option value="unknow">Unknow</option>
                            <option value="lost">Lost</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="part">
                        <label>Physical Condition :</label>
                        <select name="physical_condition" >
                            <option value=''><?php echo $physical_condition ?></option>
                            <option value="good">Good</option>
                            <option value="blind">Blind</option>
                            <option value="deaf">Deaf</option>
                            <option value="disabled">Disabled</option>
                            <option value="autistic">Autistic</option>
                            <option value="mad">Mad</option>
                        </select>
                    </div>

                    <div class="part">
                        <label>Education level:</label>
                        <select name="education_level" >
                            <option value=''><?php echo $education_level ?></option>
                            <option value="kindergarten">Kindergarten</option>
                            <option value="elementary">Elementary</option>
                            <option value="primary_school">Primary School</option>
                            <option value="junior_high_school">Junior High School</option>
                            <option value="senior_high_school">Senior High School</option>
                            <option value="secondary_school">secondary_school</option>
                        </select>
                    </div>
                </div>
                <label>Medical History:</label>
                <input type="text" name="medical_history" placeholder="<?php echo $medical_history ?>">
                <label>Hobby:</label>
                <input type="text" name="hobby"  placeholder="<?php echo $hobby ?>">
                <label>Favourite Food:</label>
                <input type="text" name="favorite_food" placeholder="<?php echo $favorite_food ?>">
                <label>Favourite Games:</label>
                <input type="text" name="favorite_games" placeholder="<?php echo $favorite_games ?>">
                <label>Skills:</label>
                <input type="text" name="skills" placeholder="<?php echo $skills ?>">
                <label>Dreams:</label>
                <input type="text" name="dreams" placeholder="<?php echo $dreams ?>">
                <label>Problems:</label>
                <input type="text" name="problems" placeholder="<?php echo $problems ?>">
                <label>Comments:</label>
                <input  type="text" name="other_comments" placeholder="<?php echo $other_comments ?>">

                <label>Image:</label>
                <input type="file" name="image" accept="image/*">

                <input type="hidden" name="orphan_id" value="<?php echo $row['orphan_id'] ?>">

                <div class="btn">
                    <button type="submit" name="update">Update</button>
                </div>
            </form>
        </div>
    </body>
</html>
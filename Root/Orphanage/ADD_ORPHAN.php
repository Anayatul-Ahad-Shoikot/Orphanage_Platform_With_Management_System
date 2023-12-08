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
        <title>CareSenerity.org | Register Orphan</title>
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
                    <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php" class="edit_profile">Edit Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>   

        <div class="container">
            <h2>Register New Orphan</h2>
            <form action="/Root/Orphanage/ADD_ORPHAN_BE.php" method="post" enctype="multipart/form-data">
                
                <input type="text" name="first_name" placeholder="First Name" >
                
                <input type="text" name="last_name" placeholder="Last Name" >

                <input type="number" name="age" placeholder="Age">

                <input type="text" name="guardian_name" placeholder="Local Gaurdian's Name" >
                
                <input type="text" name="guardian_contact" placeholder="Local Guardian's Contact Number" >

                <input type="text" name="guardian_location" placeholder="Local Gaurdian's Address" >
                
                <div class="opt">
                    <div class="part">
                    <label>Gender :</label>
                    <select name="gender" >
                        <option value=''>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    </div>
                    <div class="part">
                    <label>Religion :</label>
                    <select name="religion" >
                        <option value=''>Select</option>
                        <option value="muslim">Muslim</option>
                        <option value="hindu">Hindu</option>
                        <option value="cristian">Cristian</option>
                        <option value="buddha">Buddha</option>
                        <option value="other">Other</option>
                    </select>
                    </div>
                    <div class="part">
                    <label>Date of Birth :</label>
                    <input type="date" name="date_of_birth" >
                    </div>
                </div>

                <div class="opt">
                    <div class="part">
                        <label>Family Status :</label>
                        <select name="family_status" >
                            <option value=''>Select</option>
                            <option value="abondoned">Abandoned</option>
                            <option value="past Away">Past Away</option>
                            <option value="unknow">Unknow</option>
                            <option value="lost">Lost</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="part">
                        <label>Physical Condition :</label>
                        <select name="physical_condition" >
                            <option value=''>Select</option>
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
                            <option value=''>Select</option>
                            <option value="kindergarten">Kindergarten</option>
                            <option value="elementary">Elementary</option>
                            <option value="primary_school">Primary School</option>
                            <option value="junior_high_school">Junior High School</option>
                            <option value="senior_high_school">Senior High School</option>
                            <option value="secondary_school">secondary_school</option>
                        </select>
                    </div>
                </div>

                <input type="text" name="medical_history" placeholder="Past Medical History">

                <input type="text" name="hobby"  placeholder="Hobby">
                
                <input type="text" name="favorite_food" placeholder="Favourite Food">

                <input type="text" name="favorite_game" placeholder="Favourite Game">

                <input type="text" name="skills" placeholder="Skills">

                <input type="text" name="dreams" placeholder="Dreams">

                <input type="text" name="problems" placeholder="Problems">

                <input  type="text" name="other_comments" placeholder="Other comments">

                <label>Image:</label>
                <input type="file" name="image" accept="image/*">

                <div class="btn">
                    <button type="submit" name="Register">Register</button>
                </div>
            </form>
        </div>
    </body>
</html>
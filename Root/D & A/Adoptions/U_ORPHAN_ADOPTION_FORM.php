<?php
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Adoptions/U_ORPHAN_PROFILE_BE.php");
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
        <link rel="stylesheet" href="/Root/Orphanage/ORPHAN_PROFILE_STYLE.css">
        <link rel="stylesheet" href="/Root//D & A/Adoptions/U_ORPHAN_ADOPTION_FORM_STYLE.css">
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
                <li><a href="/Root/Home_Page/U_HOME.php">Home</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php">Profile</a></li>
                <li><a href="/Root/Org_Page/U_ORG.php">Orgs.</a></li>
                <li><a href="/Root//D & A//DON_ADOP.php">Donate</a></li>
                <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php" class="active">Adopt</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>
        
        <div class="container">
            <h2>Adoption Application Form</h2>
            <form action="/Root/D & A/Adoptions/U_SUBMIT_ADOPTION_BE.php" method="POST">

                <input type="hidden" name="orphan_id" value="<?php echo $orphan_id ?>">
                <input type="hidden" name="acc_id" value="<?php echo $acc_id ?>">
                
                <label>Adopting :</label>
                <input type="text" placeholder="<?php echo $first_name, '  ' ,$last_name ?>" disabled>

                <label>From :</label>
                <input type="text" placeholder="<?php echo $org_name ?>" disabled>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation" name="occupation" required>

                <label for="income">Annual Income:</label>
                <input type="text" id="income" name="income" required>

                <label for="maritalStatus">Marital Status:</label>
                <select id="maritalStatus" name="maritalStatus" required>
                    <option value="">Select</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>

                <label for="reason">Reason for Adoption:</label>
                <input id="reason" name="reason" required></input>

                <label for="children">Current Children (if any):</label>
                <input type="text" id="children" name="children">

                <label for="livingEnvironment">Description of Living Environment:</label>
                <input id="livingEnvironment" name="livingEnvironment" required></input>

                <label for="expectations">Expectations as Adoptive Parents:</label>
                <input id="expectations" name="expectations" required></input>

                <label for="additionalInfo">Additional Information:</label>
                <input id="additionalInfo" name="additionalInfo"></input>

                <div class="btn">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>
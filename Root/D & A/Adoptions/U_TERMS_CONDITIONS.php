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
    <link rel="stylesheet" href="/Root//D & A//Adoptions//U_TERMS&CONDITIONS_STYLE.css">
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
            <li><a href="/Root/Org_Page/U_ORG.php">Donate</a></li>
            <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php" class="active">Adopt</a></li>
            <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
            </ul>
            </div>
        </nav>
    </header>

    <div class="wrapper flex_align_justify">
        <div class="terms_service">
            <div class="tc_item tc_head flex_align_justify">
                <div class="text">
                <h2>Terms & Conditions</h2>
                </div>
            </div>
            <div class="tc_item tc_body">
                <p>These terms and conditions govern your use of <u>CareSenerity.org</u>. By using the Website, you agree to these Terms. If you disagree with any part of these Terms, please do not use the Website.</p>
                <ol>
                    <h2 class="abc">Adoption Terms</h2>
                    <li>
                        <h3>Eligibility:</h3>
                        <ul class="xyz">
                            <li>Prospective adoptive parents must comply with the legal requirements of their jurisdiction for adopting a child.</li>
                            <li>The Organization reserves the right to verify the eligibility and suitability of prospective adoptive parents through a screening process.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Child Placement:</h3>
                        <ul class="xyz">
                            <li>The Organization will facilitate the adoption process while adhering to all relevant laws and regulations.</li>
                            <li>The placement of a child will be based on compatibility, welfare, and the best interest of the child.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Adoption Process:</h3>
                        <ul class="xyz">
                            <li>Prospective parents must complete and submit all required documentation accurately and honestly.</li>
                            <li>The Organization will provide guidance and support throughout the adoption process, including necessary legal procedures.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Home Study and Assessment:</h3>
                        <ul class="xyz">
                            <li>Prospective adoptive parents may undergo a home study or assessment conducted by the Organization or authorized professionals to ensure a safe and suitable environment for the child.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Post-Adoption Support:</h3>
                        <ul class="xyz">
                            <li>The Organization may offer post-adoption support services to assist adoptive families in adjustment and addressing any challenges that may arise.</li>
                        </ul>
                    </li>
                </ol>
                <br>
                <ol>
                    <h2 class="abc">Organization Rules:</h2>
                    <li>
                        <h3>Privacy and Confidentiality:</h3>
                        <ul class="xyz">
                            <li>All information provided by users during the adoption process will be treated with strict confidentiality and used solely for adoption-related purposes.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>User Conduct:</h3>
                        <ul class="xyz">
                            <li>Users must not engage in any unlawful or inappropriate behavior on the Website.</li>
                            <li>The Organization reserves the right to refuse service, terminate accounts, or cancel adoptions if users violate these Terms.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Liability:</h3>
                        <ul class="xyz">
                            <li>The Organization shall not be held responsible for any misinformation provided by users or outcomes resulting from the adoption process.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Changes to Terms:</h3>
                        <ul class="xyz">
                            <li>The Organization reserves the right to modify these Terms at any time. Users will be notified of any changes.</li>
                        </ul>
                    </li>
                </ol>
                <br>
                <h2>Disclaimer:</h2>
                <p>These terms and conditions are for informational purposes only and do not constitute legal advice. Users are encouraged to seek legal counsel for specific guidance related to adoption laws and regulations.</p>
            </div>

            <?php
                include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
                if (isset($_GET['orphan_id'])) {
                    $orphan_id = mysqli_real_escape_string($con, $_GET['orphan_id']);
                }
            ?>
            <div class="tc_item tc_foot flex_align">
                <button class="decline_btn"><a href="/Root/D & A/Adoptions/U_ORPHAN_PROFILE.php?orphan_id=<?php echo $orphan_id ?>">Decline</a></button>
                <button class="decline_btn"><a href="/Root/D & A/Adoptions/U_ORPHAN_ADOPTION_FORM.php?orphan_id=<?php echo $orphan_id ?>">Continue</a></button>
            </div>
        </div>
    </div>
    </body>

</html>
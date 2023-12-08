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
    <link rel="stylesheet" href="/Sources//TEST//styles.css">
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
                    <li><a href="/Root/Org_Page/U_ORG.php">Orgs.</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php" class="edit_profile">Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>
        <section class="orphan-profiles">
            <div class="profile">
            <h2>Orphan Name</h2>
            <p>Age: 8 years old</p>
            <p>Gender: Male</p>
            <button onclick="showUserConfirmation()">Continue</button>
            </div>
        </section>

       
        <section class="user-confirmation" style="display: none;">
            <div class="confirmation-text">
            <p>User Confirmation:</p>
            <p>By proceeding, you confirm your interest in adopting the orphan mentioned above.</p>
            <button onclick="showTermsAndConditions()">Continue</button>
            </div>
        </section>


        <section class="terms-conditions" style="display: none;">
            <div class="terms">
            <h2>Terms and Conditions</h2>
            <p>Include detailed terms and conditions here...</p>
            <button onclick="submitAdoptionRequest()">Continue</button>
            </div>
        </section>

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

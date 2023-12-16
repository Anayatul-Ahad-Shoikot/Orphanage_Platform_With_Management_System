<?php 
    include("/xampp/htdocs/DBMS_Project_Organized_One/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS_BE.php");
    include('/xampp/htdocs/DBMS_Project_Organized_One/Root/D & A/Org_donation_adoption/ORPHAN__AMOUNT_DASH_BE.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
            <link rel="stylesheet" href="/Root//D & A//Org_donation_adoption//DON_ADOP_STYLE.css">
            <link rel="stylesheet" href="/Root//D & A//Org_donation_adoption//ORPHAN_AMOUNT_DASH_STYLE.css">
            <title>CareSenerity.org | D&A</title>
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
                <li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php" class="active">Profile</a></li>
                <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
                <li><a href="/Root//Gallary//O_GALLERY_DASH.php">Gallery</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/Org/EDIT_PROFILE.php">Edit Profile</a></li>
            </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="left_portion">
            <div class="userDetails1">
                <div>
                    <img src="../../Dashboards/Own-Profiles/Org/<?php echo $org_logo ?>"  width="250px" height="250px">
                </div>
                <div class="userDetails">
                    <div class="userName">
                        <h1><?php echo $org_name ?></h1>
                    </div>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <p><?php echo $org_location ?>, Bangladesh</p>
                    </div>
                    <div class="map">
                    <i class='bx bxs-briefcase'></i>
                    <p><?php echo $role ?></p>
                </div>
                <div class="inner_container">
                    <div class="map">
                        <i class='bx bxs-send'></i>
                        <p>Messages</p>
                    </div>
                    <div class="map">
                        <i class='bx bxs-error-alt'></i>
                        <p>Reports</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="options">
            <a href="#" class="btn">####</a>
            <form action="#" method="GET">
                <input type="text" name="query" placeholder="Search Child...">
                <button type="submit" class="btn"><i class="ri-search-line"></i></button>
            </form>
        </div>
        <div id="tab">
            <div class="table">
                <div class="table-header">
                    <div class="header__item"><h2>Orphan_id</h2></div>
                    <div class="header__item"><h2>Name</h2></div>
                    <div class="header__item"><h2>Amount</h2></div>
                    <div class="header__item"><h2>Action</h2></div>
                </div>
                <div class="table-content">	
                    <?php
                        foreach ($Array as $row) {
                            echo '<div class="table-row">';
                            echo '<div class="table-data">' . $row['orphan_id'] . '</div>';
                            echo '<div class="table-data">' . $row['first_name'] . ' ' . $row['last_name'] . '</div>';
                            echo '<div class="table-data">' . $row['total_amount'] . '</div>';
                            echo '<div class="table-data"><button class="edit-btn" data-orphan_id="' . $row['orphan_id'] . '">edit</button></div>';
                            echo '</div>';
                        }
                    ?>
                </div>
        </div>

        <div id="deductionModal" class="modal">
            <div class="modal-content">
                <div class="row_1">
                    <h2>Detach Amount</h2>
                    <span class="close">&times;</span>
                </div>
                <form action="/Root/D & A/Org_donation_adoption/REDUCE_AMOUNT_ORPHAN_BE.php" method="POST">
                    <input type="number" id="deductAmount" name="deductAmount" required>
                    <input type="hidden" id="orphanId" name="orphanId" value="">
                    <button id="confirmDeduction">OK</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
    $('.edit-btn').click(function() {
        var orphanID = $(this).data('orphan_id');
        $('#orphanId').val(orphanID);
        $('#deductionModal').css('display', 'block');
    });

    $('.close').click(function() {
        $('#deductionModal').css('display', 'none');
    });

    $('#confirmDeduction').click(function() {
        var orphanId = $('#orphanId').val();
        var deductAmount = $('#deductAmount').val();

        // Log data (for verification)
        console.log('Orphan ID:', orphanId);
        console.log('Deduct Amount:', deductAmount);
    });
});
    </script>



</body>
</html>
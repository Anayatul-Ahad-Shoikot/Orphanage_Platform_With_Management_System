<?php 
    session_start();
    $_SESSION['showChatBox'] = 0;
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
    <link rel="stylesheet" href="/Root/Org_Page/VIEW_ORG_STYLE.css">
    <title>CareSenerity.org | Org Profile</title>
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
                    <li><a href="/Root/Org_Page/U_ORG.php" class="active">Orgs.</a></li>
                    <li><a href="/Root/Org_Page/U_ORG.php">Donate</a></li>
                    <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <div class="container">
        <?php
            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Org_Page/VIEW_ORG_BE.php');
        ?>
        <div class="left_portion">
            <div class="userDetails1">
                <div>
                    <img src= "..//..//..//Dashboards/Own-Profiles/Org/<?php echo $org_logo ?>" alt="profile" width="250px" height="250px">
                </div>
                <div class="userDetails">
                    <div class="userName">
                        <h1><?php echo $org_name ?></h1>
                    </div>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <p><?php echo $org_location, ", Bangladesh" ?></p>
                    </div>
                    <div class="inner_container">
                        <div class="map">
                            <i class='bx bxs-send'></i>
                            <button id="showChatBtn">Message</button>
                        </div>
                        <div class="map">
                            <i class='bx bxs-error-alt'></i>
                            <p>Reports</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work">
                <div class="tabs">
                    <i class='bx bxs-briefcase'></i>
                    <p>Motive</p>
                </div>
                <div class="primary">
                    <h1><?php echo $org_vision ?></h1>
                    <p><?php echo $org_description ?></p>
                </div>
            </div>
        </div>

        <div class="options">
            <a href="#" class="btn x">Oldage</a>
            <a href="/Root/Orphanage/USER-PERSPECTIVE/U_UP_ORPHAN_DASH.php?org_id=<?php echo $org_id ?>" class="btn y">Orphanage</a>
        </div>


        <div class="right_portion">
            <div class="plate">
                <h1 class="heading">Basic Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>Established :</label>
                            <input placeholder="<?php echo $established ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Phone :</label>
                            <input placeholder="<?php echo $org_phone ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Email :</label>
                            <input placeholder="<?php echo $org_email ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Web Site :</label>
                            <input placeholder="<?php echo $org_website ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Address :</label>
                            <input placeholder="<?php echo $org_location ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="chatContainer" class="chat-container clearfix" style="display: none;">
        <div class="chat">
            <div class="chat-header clearfix">
                <div>
                    <img src="..//..//..//Dashboards/Own-Profiles/Org/<?php echo $org_logo ?>" alt="avatar" />
                    <div class="chat-about">
                        <div class="chat-with"><?php echo $org_name ?></div>
                        <div class="chat-num-messages"></div>
                    </div>
                </div>
                <i class='bx bxs-message-square-x' id="closeChat"></i>
            </div> 
            <div class="chat-history">
                <ul>
                    <?php
                        include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Chats/FETCH_CHATS_BE.php');
                    ?>
                </ul>
            </div> 
            <div class="chat-message clearfix">
                <form action="/Root/Chats/CHAT_INSERT_BE.php" method="POST">
                    <input name="msg" id="message-to-send" placeholder ="Type your message"></input>
                    <input type="hidden" name="org_id" id="org_id" value="<?php echo $org_id ?>"></input>
                    <input type="hidden" name="org_name" id="acc_id" value="<?php echo $org_name ?>"></input>
                    <button id="sendMessageBtn">Send</button>
                </form>
            </div> 
        </div>
    </div>
    
    <script>
        var showChatBox = "<?php echo $_SESSION['showChatBox']; ?>";
        const showChatBtn = document.getElementById('showChatBtn');
        const chatContainer = document.getElementById('chatContainer');
        const closeChat = document.getElementById('closeChat');
        if (showChatBox === 1){
            document.getElementById('chatContainer').style.display = 'block';
            } else {
            document.getElementById('chatContainer').style.display = 'none';
        }
        showChatBtn.addEventListener('click', function() {
            chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
        });
        closeChat.addEventListener('click', function() {
            chatContainer.style.display = 'none';
        });
    </script>
</body>

</html>

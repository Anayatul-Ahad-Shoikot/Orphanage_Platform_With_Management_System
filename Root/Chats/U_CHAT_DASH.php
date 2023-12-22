<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organization Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS_STYLE.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/Root/Chats/CHAT_DASH_STYLE.css">
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
                <li><a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php" class="active">Profile</a></li>
                <li><a href="/Root/Org_Page/U_ORG.php">Orgs.</a></li>
                <li><a href="/Root/Gallary/U_GALLERY_DASH.php">Gallery</a></li>
                <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php" class="edit_profile">Edit Profile</a></li>
            </ul>
        </div>
      </nav>
    </header>
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app">
                <div id="plist" class="people-list">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    <ul class="list-unstyled chat-list mt-2 mb-0">
                        <?php 
                            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Chats/U_CHAT_LIST_FETCH_BE.php');
                        ?>
                    </ul>
                </div>
                <div class="chat">
                    <div class="chat-header clearfix" style="visibility: hidden;">
                        <div class="row">
                            <div class="col-lg-6" id="header_box">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                </a>
                                <div class="chat-about">
                                    <h6>Aiden Chavez</h6>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="chat-history" id="chat-history">
                            <?php 
                                include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
                                if (isset($_GET['current_user']) && isset($_GET['selected_user']) && !empty($_GET['current_user']) && !empty($_GET['selected_user'])) {
                                    $current_user = $_GET['current_user'];
                                    $selected_user = $_GET['selected_user'];
                                    $query = "SELECT * FROM chats 
                                            WHERE (sender_id = $current_user AND receiver_id = $selected_user)
                                            OR (sender_id = $selected_user AND receiver_id = $current_user)
                                            ORDER BY date_time DESC";
                                    $result = mysqli_query($con, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '<ul class="m-b-0">';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<li class="clearfix">';
                                            if ($row['receiver_id'] == $current_user) {
                                                echo '<div class="message-data">';
                                                echo '<span class="message-data-time">' . $row['date_time'] . '</span>';
                                                echo '</div>';
                                                echo '<div class="message my-message">' . $row['msg'] . '</div>';
                                            } else {
                                                echo '<div class="message-data text-right">';
                                                echo '<span class="message-data-time">' . $row['date_time'] . '</span>';
                                                echo '</div>';
                                                echo '<div class="message my-message float-right">' . $row['msg'] . '</div>';
                                            }
                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                    } else {
                                        echo '<p>No chat history found.</p>';
                                    }
                                } 
                                mysqli_close($con);
                            ?>

                    </div>
                    <div class="chat-message clearfix" style="visibility: hidden;">
                        <div class="input-group mb-0" id="footer_box">
                            <form action="/Root/Chats/U_CHAT_INSERT_BE.php?selected_user=<?php echo $selected_user ?>&current_user=<?php echo $current_user ?>" method="POST">
                                <input name="msg" id="message-to-send" placeholder ="Type your message"></input>
                                <button id="sendMessageBtn">Send</button>
                            </form>                            
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("ul.list-unstyled").on("click", "li", function(event) {
            var selectedUserId = $(this).data("user-id");
            $.ajax({
                url: '/Root/Chats/GET_SELECTED_CHATS_BE.php',
                type: 'POST',
                data: { current_user: <?php echo $current_user; ?>, selected_user: selectedUserId },
                success: function(response) {
                    $('#chat-history').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const footerBox = document.getElementById('footer_box');
    const headerBox = document.getElementById('header_box');
    
    // Check localStorage to determine whether to show or hide the boxes
    const isChatClicked = localStorage.getItem('chatClicked');

    footerBox.style.display = 'none';
    headerBox.style.display = 'none';

    if (isChatClicked === 'true') {
        footerBox.style.display = 'block';
        headerBox.style.display = 'block';
    } else {
        footerBox.style.display = 'none';
        headerBox.style.display = 'none';
    }

    // Get all anchor tags inside the chat-list
    const chatLinks = document.querySelectorAll('.chat-list a');

    // Add a click event listener to each anchor tag
    chatLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            // Store a value in localStorage to indicate that chat was clicked
            localStorage.setItem('chatClicked', 'true');
        });
    });
});


</script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organization Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/Root/Chats/CHAT_DASH_STYLE.css">
</head>
<body>
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
                            include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Chats/INCOMING_MSG_BE.php');
                        ?>
                    </ul>
                </div>
                <div class="chat">
                    <div class="chat-header clearfix">
                    </div>
<<<<<<< HEAD
                    <div class="chat-history">
                        <ul class="m-b-0">
                            <li class="clearfix">
                                <div class="message-data">
                                    <span class="message-data-time">10:12 AM, Today</span>
                                </div>
                                <div class="message my-message">Are we meeting today?</div>                                    
                            </li>                               
                            <li class="clearfix">
                                <div class="message-data">
                                    <span class="message-data-time">10:15 AM, Today</span>
                                </div>
                                <div class="message my-message">Project has been already finished and I have results to show you.</div>
                            </li>
                        </ul>
=======
                    <div class="chat-history" id="chat-history">
                            <?php 
                                include('/xampp/htdocs/DBMS_Project_Organized_One/Includes/db_con.php');
                                if (isset($_GET['current_user']) && isset($_GET['selected_user']) && !empty($_GET['current_user']) && !empty($_GET['selected_user'])) {
                                    $current_user = $_GET['current_user'];
                                    $selected_user = $_GET['selected_user'];
                                    $query = "SELECT * FROM chats 
                                            WHERE (sender_id = $current_user AND receiver_id = $selected_user)
                                            OR (sender_id = $selected_user AND receiver_id = $current_user)
                                            ORDER BY date_time";
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
>>>>>>> 5e0c52f8432589cc9aed6455ac4ded8e4fe4ec8b
                    </div>
                    <div class="chat-message clearfix">
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-send"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter text here...">                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $("ul.list-unstyled").on("click", "li", function() {
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
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>

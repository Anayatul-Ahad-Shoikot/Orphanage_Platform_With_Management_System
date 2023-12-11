<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Root/Reset_Password/RESET_STYLE.css">
    <title>Home</title>
</head>
<body>
    <div class="alert one">
        <?php
            if(isset($_SESSION['notify'])){
                echo "<h5>".$_SESSION['notify']."</h5>";
                unset($_SESSION['notify']);
            }
        ?>
    </div>
    <div class="alert two">
        <?php
            if(isset($_SESSION['status-2'])){
                echo "<h5>".$_SESSION['status-2']."</h5>";
                unset($_SESSION['status-2']);
            }
        ?>
    </div>
    <div class="login-container">
        <form action="/Root/Reset_Password/CODE_BE.php" method="POST">
            <p>A varification code sent to your Email. Please enter the code to continue.</p>
            <div class="input-container">
                <input type="text" name="var_code" placeholder="Enter the code...." required>
            </div>
            <button type="submit" name="go">Continue</button>
        </form>
        <a href="/Root/Login_Page/LOGIN_FORM.php" class="goback">Go Back</a>
    </div>
</body>
</body>
</html>


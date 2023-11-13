<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Root//Login_Page//LOGIN_FORM_STYLE.css">
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
        <form action="/Root/Login_Page/LOGIN_FORM_BE.php" method="POST">
            <h1>LogIn</h1>
            <div class="input-container">
                <label>Username</label>
                <input type="text" name="user_name" required>
            </div>
            <div class="input-container">
                <label>Password</label>
                <input type="password" name="user_pass" required>
            </div>
            <button type="submit" name="login_btn">LogIn</button>
        </form>
        <div class="forgetPass">
            <a href="resetpassPage.php">Forget password?</a>
        </div>
        <p>Don't have an account?  <a href="/Root//Signup_Page//SIGNUP_FORM.php">SignUp</a></p>
        <a href="/Root//Landing_Page//INDEX.php" class="goback">Go Back</a>
    </div>
</body>
</body>
</html>


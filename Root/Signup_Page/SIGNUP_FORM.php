<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Root/Signup_Page/SIGNUP_FORM_STYLE.css">
        <title>CareSerenity.org | Sign up page</title>
    </head>
    <body>
        <div class="alert">
            <?php
                if(isset($_SESSION['status'])){
                    echo "<h5>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }
            ?>
        </div>
        <div class="container">
            <form action="/Root/Signup_Page/SIGNUP_FORM_BE.php" method="POST">
                <h1>SignUp</h1>
                <div class="row">  
                    <div class="input-container">
                        <label>Username</label>
                        <input type="text" name="user_name" required>
                    </div>
                    <div class="input-container">
                        <label>Email</label>
                        <input type="text" name="user_email" required>
                    </div>
                    <div class="input-container">
                        <label>Password</label>
                        <input type="password" name="user_pass" required>
                    </div>
                    <div class="input-container">
                        <label>Confirm password</label>
                        <input type="password" name="confirm_pass" required>
                    </div>
                </div>
                <div class="row_row">
                    <div class="input-container1">
                        <label>Account type</label>
                        <select name="acc_type" >
                            <option value=''>Select</option>
                            <option value="male">user</option>
                            <option value="female">org</option>
                            <option value="other">admin</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="signup_btn">SignUp</button>
            </form>
            <p>Already have an account?  <a href="/Root/Login_Page/LOGIN_FORM.php">Login</a></p>
            <a href="/Root/Landing_Page/INDEX.php">Go Back</a>
        </div>
    </body>
    </body>
</html>
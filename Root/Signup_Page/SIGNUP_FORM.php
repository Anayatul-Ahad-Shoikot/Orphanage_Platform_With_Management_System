<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="SIGNUP_FORM_STYLE.css">
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
            <form action="SIGNUP_FORM_BE.php" method="POST">
                <h1>SignUp</h1>
                <div class="row">  
                    <div class="input-container">
                        <label>Account Name</label>
                        <input type="text" name="acc_name" required>
                    </div>
                    <div class="input-container">
                        <label>Account Email</label>
                        <input type="text" name="acc_email" required>
                    </div>
                    <div class="input-container">
                        <label>Account Password</label>
                        <input type="password" name="acc_pass" required>
                    </div>
                    <div class="input-container">
                        <label>Confirm password</label>
                        <input type="password" name="confirm_pass" required>
                    </div>
                </div>
                <div class="row_row">
                    <div class="input-container1">
                        <label>Account type</label>
                        <select name="role" >
                            <option value=''>Select</option>
                            <option value="user">user</option>
                            <option value="org">org</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="signup_btn">SignUp</button>
            </form>
            <p>Already have an account?  <a href="../Login_Page/LOGIN_FORM.php">Login</a></p>
            <a href="../Landing_Page/INDEX.php">Go Back</a>
        </div>
    </body>
    </body>
</html>
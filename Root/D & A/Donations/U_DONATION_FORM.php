<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> CareSenerity.org | Donate </title>
        <link rel="stylesheet" href="/Root/D & A//Donations/U_DONATION_FORM_STYLE.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
                    <li><a href="/Root/D & A/Donations/U_DONATION_DASH.php" class="active">Donate</a></li>
                    <li><a href="/Root/D & A/Adoptions/U_ADOPTION_DASH.php">Adopt</a></li>
                    <li><a href="/Root/Dashboards/Own-Profiles/User/EDIT_PROFILE.php">Edit Profile</a></li>
                </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="wrapper">
                <h2>Donation Form</h2>
                <form action="/Root//D & A//Donations//U_SEND_DONATION_BE.php" method="POST">
                    <div class="input_group">
                        <div class="input_box">
                            <input type="text" name="donor_email" placeholder="Email Address" required class="name">
                            <i class="fa fa-envelope icon"></i>
                        </div>
                    </div>
                    <div class="input_group" style="display: flex; flex-direction: column;">
                        <h4>Payment Method</h4>
                        <div class="input_box">
                            <input type="radio" name="pay" class="radio" id="bc1" value="card" checked>
                            <label for="bc1">
                                <span>Credit Card</span>
                            </label>
                            <input type="radio" name="pay" class="radio" id="bc2" value="bkash">
                            <label for="bc2">
                                <span>Bkash</span>
                            </label>
                        </div>
                    </div>
                    <div id="creditCardInputs">
                        <div class="input_group">
                            <div class="input_box">
                                <input type="text" name="card_no" class="name" placeholder="Card Number" required>
                                <i class="fa fa-credit-card icon"></i>
                            </div>
                        </div>
                        <div class="input_group">
                            <div class="input_box">
                                <input type="text" name="card_cvc" class="name" placeholder="Card CVC" required>
                                <i class="fa fa-user icon"></i>
                            </div>
                        </div>
                        <div class="input_group">
                            <div class="input_box">
                                <div class="input_box">
                                    <input type="text" name="card_exp_month" placeholder="Exp Month" required class="name">
                                    <i class="fa fa-calendar icon"></i>
                                </div>
                            </div>
                            <div class="input_box">
                                <input type="text" name="card_exp_year" placeholder="Exp Year" required class="name">
                                <i class="fa fa-calendar-o icon"></i>
                            </div>
                        </div>
                    </div>
                    <div id="bkashInputs" style="display: none;">
                        <div class="input_group">
                            <div class="input_box">
                                <input type="text" name="bkash_no" class="name" placeholder="Bkash Number" required>
                                <i class="fa fa-phone icon"></i>
                            </div>
                        </div>
                        <div class="input_group">
                            <div class="input_box">
                                <input type="text" name="Bkash_trans" class="name" placeholder="Transection ID" required>
                                <i class="fa fa-sort-numeric-desc icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input_box">
                        <input type="text" name="amount" placeholder="Donation Amount" required class="name">
                        <input type="hidden" name="org_id" value="<?php echo $_GET['org_id'] ?>">
                        <i class="fa fa-money icon" aria-hidden="true"></i>
                    </div>
                    <div class="input_group">
                        <div class="input_box">
                            <button type="submit" name="donate">Donate</button>
                        </div>
                        <div class="input_box">
                            <button type="button" id="cancelBtn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            const creditCardInputs = document.getElementById('creditCardInputs');
            const bkashInputs = document.getElementById('bkashInputs');
            const bkashRadio = document.getElementById('bc2');
            const creditCardRadio = document.getElementById('bc1');
            function handlePaymentMethodChange() {
                if (bkashRadio.checked) {
                    creditCardInputs.style.display = 'none';
                    bkashInputs.style.display = 'block';
                    document.getElementsByName('bkash_no')[0].setAttribute('required', 'required');
                    document.getElementsByName('Bkash_trans')[0].setAttribute('required', 'required');
                    document.getElementsByName('card_no')[0].removeAttribute('required');
                    document.getElementsByName('card_cvc')[0].removeAttribute('required');
                    document.getElementsByName('card_exp_month')[0].removeAttribute('required');
                    document.getElementsByName('card_exp_year')[0].removeAttribute('required');
                } else if (creditCardRadio.checked) {
                    creditCardInputs.style.display = 'block';
                    bkashInputs.style.display = 'none';
                    document.getElementsByName('card_no')[0].setAttribute('required', 'required');
                    document.getElementsByName('card_cvc')[0].setAttribute('required', 'required');
                    document.getElementsByName('card_exp_month')[0].setAttribute('required', 'required');
                    document.getElementsByName('card_exp_year')[0].setAttribute('required', 'required');
                    document.getElementsByName('bkash_no')[0].removeAttribute('required');
                    document.getElementsByName('Bkash_trans')[0].removeAttribute('required');
                }
            }
            const paymentRadios = document.querySelectorAll('input[name="pay"]');
            paymentRadios.forEach(radio => {
                radio.addEventListener('change', handlePaymentMethodChange);
            });
            handlePaymentMethodChange();
        </script>

        <script>
            document.getElementById('cancelBtn').addEventListener('click', function() {
            var orgId = <?php echo json_encode($_GET['org_id']); ?>;
            window.location.href = '/Root/D & A/Donations/U_DONATION_DASH.php?org_id=' + orgId;
            });
        </script>
    </body>
</html>
        
<?php
include "../Controller/Registrationvalidation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    
    <script>
        function validateRegistration() {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();
            let confirmPassword = document.getElementById("confirm_password").value.trim();
            let valid = true;
            let messages = [];

            if (name.length < 5) {
                messages.push("User Name must be at least 5 characters.");
                valid = false;
            }
            if (email === "") {
                messages.push("Please enter a valid email address.");
                valid = false;
            }
            if (password.length < 5) {
                messages.push("Password must be at least 5 characters.");
                valid = false;
            }
            if (password !== confirmPassword) {
                messages.push("Passwords do not match.");
                valid = false;
            }

            if (!valid) {
                alert(messages.join("\n"));
            }
            return valid;
        }
    </script>
    
    
    <script src="../JS/checkuser.js"></script>
</head>
<body>

    <div class="wrap">
        <div class="panel">
            <h1>Registration Form</h1>

            <?php if (!empty($message)): ?>
                <p style="color: red; text-align: center; font-weight: bold; margin-bottom: 15px;">
                    <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            <?php endif; ?>

            <form method="post" action="" onsubmit="return validateRegistration()">

                
                <div class="field">
                    <label for="name">User Name:</label>
                    <input type="text" id="name" name="name" onkeyup="CheckUser()" value="<?php echo !empty($name) ? htmlspecialchars($name, ENT_QUOTES, 'UTF-8') : ''; ?>" placeholder="Enter User Name">
                    <span id="userresponse" style="font-size: 13px; font-weight: bold;"></span>
                </div>

                <div class="field">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" value="<?php echo !empty($email) ? htmlspecialchars($email, ENT_QUOTES, 'UTF-8') : ''; ?>" placeholder="Enter Email">
                </div>

                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>

                <div class="field">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                </div>

                <div style="display: flex; gap: 10px; margin-top: 15px;">
                    <button type="submit" class="btn">Register</button>
                    <button type="reset" class="btn btn-secondary" style="background-color: #6c757d;">Reset</button>
                </div>

            </form>

            <br>

            <div class="form-foot">
                <p>Already have an account? <a href="login.php" class="back-link">Login here</a></p>
                <p style="margin-top: 10px;"><a href="dashboard.php" class="back-link">&larr; Back to Dashboard</a></p>
            </div>

        </div>
    </div>

</body>
</html>
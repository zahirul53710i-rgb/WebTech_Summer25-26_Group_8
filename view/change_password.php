
<?php
include "../Controller/ChangePasswordController.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
 
    <title>Change Password</title>
    <script>
        function validateForm() {
            let currentPass = document.getElementById("current_password").value.trim();
            let newPass = document.getElementById("new_password").value.trim();
            let messages = [];
            let valid = true;
 
            if (currentPass === "") {
                messages.push("Current Password is required.");
                valid = false;
            }
            if (newPass.length < 5) {
                messages.push("New Password must be at least 5 characters.");
                valid = false;
            }
 
            if (!valid) {
                alert(messages.join("\n"));
            }
            return valid;
        }
    </script>
</head>
<body>
    <div class="wrap">
        <div class="panel">
            <h1>Change Password</h1>
            <p class="sub">Update your account password</p>
 
            <form action="" method="POST">
                <div class="field">
                    <label>Current Password</label>
                    <input type="password" name="current_password" required>
                </div>
 
                <div class="field">
                    <label>New Password</label>
                    <input type="password" name="new_password" required>
                </div>
 
                <button type="submit" class="btn">Update Password</button>
            </form>
 
            <br>
            <a href="delivery_dashboard.php" class="back-link">&larr; Back to Dashboard</a>
        </div>
    </div>
</body>
 
 


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
 
    <h2>Change Password</h2>
    <a href="delivery_dashboard.php">Back to Dashboard</a>
    <br><br>
 
    <?php if (!empty($message)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>
 
    <form method="post" action="" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="current_password">Current Password:</label></td>
                <td><input type="password" id="current_password" name="current_password"></td>
            </tr>
            <tr>
                <td><label for="new_password">New Password:</label></td>
                <td><input type="password" id="new_password" name="new_password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Change Password">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
 
</body>
</html>
 

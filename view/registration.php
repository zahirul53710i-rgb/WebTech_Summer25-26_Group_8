
<?php
include "../Controller/RegistrationValidation.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <script>
        function collect_data() {
            let name = document.getElementById("name").value.trim();
            let password = document.getElementById("password").value.trim();
            let valid = true;
            let messages = [];
 
            if (name.length < 5) {
                messages.push("User Name Should be at least 5 Char");
                valid = false;
            }
            if (password.length < 5) {
                messages.push("Password Must be at least 5 Char");
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
 
    <h2>Registration Form</h2>
 
    <?php if (!empty($message)): ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>
 
    <form enctype="multipart/form-data" method="post" action="" onsubmit="return collect_data()"> 
        <table>
            <tr>
                <td><label for="name">User Name:</label></td>
                <td><input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="file">Profile Picture:</label></td>
                <td><input type="file" name="file" id="file"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Register">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
 
    <p>Already have an account? <a href="login.php">Login here</a></p>
 
</body>
</html>
 
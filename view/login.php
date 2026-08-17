<?php
include "../Controller/Loginvalidation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
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
 
    <div class="wrap">
        <div class="panel">
            <h1>Login Form</h1>
 
            <?php if (!empty($message)): ?>
                <p style="color: red; text-align: center; font-weight: bold; margin-bottom: 15px;">
                    <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            <?php endif; ?>
 
            <form method="post" action="" onsubmit="return collect_data()">
                
                <div class="field">
                    <label for="name">User Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Enter User Name">
                </div>
 
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
 
                <div class="field" style="display: flex; align-items: center; gap: 8px;">
                    <input type="checkbox" id="remember" name="remember" value="1" style="width: auto;" <?php echo !empty($remember) ? 'checked' : ''; ?>>
                    <label for="remember" style="margin-bottom: 0; cursor: pointer;">Remember Me</label>
                </div>
 
                <div style="display: flex; gap: 10px; margin-top: 15px;">
                    <button type="submit" class="btn">LogIn</button>
                    <button type="reset" class="btn btn-secondary" style="background-color: #6c757d;">Reset</button>
                </div>
 
            </form>
 
            <br>
 
            <div class="form-foot">
                <p>Don't have an account? <a href="registration.php" class="back-link">Register here</a></p>
            </div>
            
        </div>
    </div>
 
</body>
</html>
 

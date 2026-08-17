<?php
include "../controller/Loginvalidation.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Buyer Login Page</title>
        <script>
            function collect_data()
            {
                let name = document.getElementById("name").value.trim();
                let password = document.getElementById("password").value.trim();
                let valid = true;
                let message = "";

                if(name.length < 5)
                {
                    message += "User Name Should be at least 5 Characters\n";
                    valid = false;
                }
                if(password.length < 5)
                {
                    message += "Password Must be at least 5 Characters\n";
                    valid = false;
                }
                if(!valid)
                {
                    alert(message);
                }
                return valid;
            }
        </script>
    </head>
    <body>

        <form method="post" action="" onsubmit="return collect_data()"> 
            <fieldset>
                <legend>Welcome! Login as Buyer</legend>
                <table>
                    <tr>
                        <td><label for="name">User Name:</label></td>
                        <td>
                            <input type="text" id="name" name="name">
                            <?php echo isset($name) ? $name : ''; ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td>
                            <input type="password" id="password" name="password">
                            <?php echo isset($password) ? $password : ''; ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="checkbox" id="remember" name="remember" value="1" <?php echo isset($remember) && $remember ? 'checked' : ''; ?>>
                            <label for="remember">Remember Me</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" id="submit" value="LogIn">
                            <input type="reset" id="reset" value="Reset">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <a href="ForgetPassword.php">Forgot Password?</a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            Don't have an account? <a href="Registration.php">Sign Up</a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

    </body>
</html>
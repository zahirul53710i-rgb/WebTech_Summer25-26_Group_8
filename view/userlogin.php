<?php
//include "../Controller/Loginvalidation.php";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f0ea; 
            color: #2c4238;
            line-height: 1.6;
            padding: 20px;
        }

        /* LOGIN CONTAINER */
        .container {
            width: 90%;
            max-width: 440px;
            margin: 60px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        /* HEADING */
        h1 {
            font-family: Georgia, serif;
            font-size: 30px;
            font-weight: normal;
            color: #2c4238; 
            text-align: center;
            margin-bottom: 25px;
        }

        form {
            display: block;
        }

        fieldset {
            width: 100%;
            border: 1px solid #e2ddd3;
            border-radius: 8px;
            padding: 22px;
            background-color: #ffffff;
        }

        legend {
            padding: 0 10px;
            color: #2c4238;
            font-weight: bold;
            font-size: 18px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 8px;
        }

        label {
            display: inline-block;
            color: #2c4238;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* INPUT FIELDS */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 5px 0;
            border: 1px solid #e2ddd3;
            border-radius: 8px;
            background-color: #eeebe3; 
            color: #2c4238;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #4d6b5e;
        }

        /* BUTTONS */
        input[type="button"],
        input[type="reset"] {
            background-color: #4d6b5e; 
            color: white;
            padding: 12px 18px;
            width: 100%;
            border-radius: 8px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            margin-top: 5px;
        }

        input[type="button"]:hover {
            background-color: #3c5449;
        }

        input[type="reset"] {
            background-color: #8c8275; 
        }

        input[type="reset"]:hover {
            background-color: #736a5e;
        }

        /* LINK */
        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: #4d6b5e;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .link a:hover {
            color: #2c4238;
            text-decoration: underline;
        }

        /* RESPONSIVE */
        @media screen and (max-width: 500px) {
            body {
                padding: 10px;
            }

            .container {
                width: 100%;
                margin: 30px auto;
                padding: 20px;
            }

            fieldset {
                padding: 15px;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Welcome as Buyer</h1>

        <form method="post" action="">

            <fieldset>

                <legend>Buyer Login</legend>

                <table>

                    <tr>
                        <td>
                            <label for="username">User Name:</label>
                        </td>

                        <td>
                            <input type="text" id="username" name="username" placeholder="Enter your User Name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Password:</label>
                        </td>

                        <td>
                            <input type="password" id="password" name="password" placeholder="Enter your Password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="button" id="submit" name="submit" value="Login" onclick="location.href='cart.php'">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="reset" id="reset" name="reset" value="Reset">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="link">
                                Don't have an account? <a href="buyer_registration.php">Sign Up</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="link">
                                <a href="ForgotPassword.php">Forgot Password?</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="link">
                                <a href="buyer_profile_view_update.php">Update Profile</a>
                            </div>
                        </td>
                    </tr>

                </table>

            </fieldset>

        </form>

    </div>

</body>

</html>
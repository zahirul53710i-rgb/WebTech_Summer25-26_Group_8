<?php
include "../Controller/Loginvalidation.php";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <title>Login</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: bisque;
            padding: 20px;
            line-height: 1.5;
        }

        .container{
            max-width: 500px;
            margin: 80px auto;
            background-color: white;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 20px 20px;
        }

        h1{
            color: blue;
            text-align: center;
            margin-bottom: 30px;
            font-size: 26px;
        }

        form{
            display: flex;
        }

        fieldset{
            width: 100%;
            border-radius: 30px;
            padding: 20px;
            background-color: cornsilk;
        }

        legend{
            padding: 0 10px;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        table{
            width: 100%;
        }

        td{
            padding: 8px;
        }

        label{
            display: inline-block;
            color: black;
            font-size: 18px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"]{
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid;
            border-radius: 10px;
            background-color: white;
            font-size: 14px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        input[type="submit"],
        input[type="reset"]{
            background-color: red;
            color: white;
            padding: 12px 15px;
            width: 100%;
            border-radius: 10px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover{
            background-color: black;
        }

        input[type="reset"]:hover{
            background-color: green;
        }

        .link{
            text-align: center;
            margin-top: 15px;
        }

        .link a{
            color: blue;
            text-decoration: none;
        }

        .link a:hover{
            text-decoration: underline;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>Welcome as User</h1>

        <form method="post" action="">

            <fieldset>

                <legend>User Login</legend>

                <table>

                    <tr>
                        <td>
                            <label for="username">User Name:</label>
                        </td>

                        <td>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   placeholder="Enter your User Name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Password:</label>
                        </td>

                        <td>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   placeholder="Enter your Password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">

                            <input type="submit"
                                   id="submit"
                                   name="submit"
                                   value="Login">

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">

                            <input type="reset"
                                   id="reset"
                                   name="reset"
                                   value="Reset">

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">

                            <div class="link">

                                Don't have an account?
                                <a href="Registration.php">Registration</a>

                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">

                            <div class="link">

                                <a href="ForgotPassword.php">
                                    Forgot Password?
                                </a>

                            </div>

                        </td>
                    </tr>

                </table>

            </fieldset>

        </form>

    </div>

</body>

</html>
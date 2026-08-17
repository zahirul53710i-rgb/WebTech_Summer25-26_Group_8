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
    background-color: #f5f1e8;
    color: #26332d;
    line-height: 1.6;
    padding: 20px;
}


/* =========================
   LOGIN CONTAINER
   ========================= */

.container {
    width: 90%;
    max-width: 440px;
    margin: 60px auto;
    background-color: #fffdf8;
    padding: 30px;
    border-radius: 12px;
    border: 1px solid #ddd5c5;
    box-shadow: 0 4px 12px rgba(50, 45, 35, 0.08);
}


/* =========================
   HEADING
   ========================= */

h1 {
    font-family: Georgia, serif;
    font-size: 30px;
    font-weight: normal;
    color: #263f35;
    text-align: center;
    margin-bottom: 25px;
}


/* =========================
   FORM
   ========================= */

form {
    display: block;
}


/* =========================
   FIELDSET
   ========================= */

fieldset {
    width: 100%;
    border: 1px solid #ddd5c5;
    border-radius: 8px;
    padding: 22px;
    background-color: #f5f1e8;
}

legend {
    padding: 0 10px;
    color: #263f35;
    font-weight: bold;
    font-size: 18px;
}


/* =========================
   TABLE
   ========================= */

table {
    width: 100%;
}

td {
    padding: 8px;
}


/* =========================
   LABEL
   ========================= */

label {
    display: inline-block;
    color: #263f35;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
}


/* =========================
   INPUT
   ========================= */

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px 12px;
    margin: 5px 0;
    border: 1px solid #ddd5c5;
    border-radius: 6px;
    background-color: #fffdf8;
    color: #26332d;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
}

input[type="text"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #527464;
}


/* =========================
   BUTTONS
   ========================= */

input[type="button"],
input[type="reset"] {
    background-color: #527464;
    color: white;
    padding: 10px 18px;
    width: 100%;
    border-radius: 6px;
    border: none;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    font-size: 14px;
    cursor: pointer;
}

input[type="button"]:hover {
    background-color: #3d5b4d;
}

input[type="reset"] {
    background-color: #b38a3d;
}

input[type="reset"]:hover {
    background-color: #96732f;
}


/* =========================
   LINK
   ========================= */

.link {
    text-align: center;
    margin-top: 18px;
}

.link a {
    color: #527464;
    text-decoration: none;
    font-size: 14px;
}

.link a:hover {
    color: #9a742e;
    text-decoration: underline;
}


/* =========================
   RESPONSIVE
   ========================= */

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

        <input type="button"
               id="submit"
               name="submit"
               value="Login"
               onclick="location.href='cart.php'">

    </td>
</tr>

                    <tr>
                        <td colspan="2">

                            <input type="reset" id="reset"
                                   name="reset"
                                   value="Reset">

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">

                            <div class="link">

                                Don't have an account?<a href="buyer_registration.php">Sign Up</a>

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
                   <tr>
    <td colspan="2">

        <div class="link">

            <a href="buyer_profile_view_update.php">
                Update Profile
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
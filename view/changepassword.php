<?php
// include __DIR__ . "/../Controller/changePasswordController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change Password</title>

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
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .page {
            width: 90%;
            max-width: 1100px;
            margin: auto;
            padding: 30px 0;
        }

        .page-header {
            background-color: #263f35;
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .page-header h1 {
            font-family: Georgia, serif;
            font-size: 32px;
            font-weight: normal;
        }

        .page-header p {
            color: #d8dfd8;
            font-size: 14px;
        }

        .panel {
            width: 90%;
            max-width: 600px;

            margin: 0 auto;

            background-color: #fffdf8;

            padding: 30px;

            border: 1px solid #ddd5c5;
            border-radius: 12px;

            box-shadow: 0 4px 12px rgba(50, 45, 35, 0.08);
        }

        .panel h2 {
            font-family: Georgia, serif;
            font-size: 25px;
            font-weight: normal;

            color: #263f35;

            margin-bottom: 8px;
        }

        .panel .sub {
            color: #62665e;
            font-size: 14px;
            margin-bottom: 22px;
        }

        .field {
            margin-bottom: 16px;
        }

        .field label {
            display: block;

            color: #263f35;

            font-size: 13px;
            font-weight: bold;

            margin-bottom: 6px;
        }

        .field input {
            width: 100%;

            padding: 10px;

            border: 1px solid #ddd5c5;
            border-radius: 6px;

            background-color: #f5f1e8;

            color: #26332d;
        }

        .field input:focus {
            outline: none;
            border-color: #527464;
        }

        .btn {
            display: inline-block;

            width: 100%;

            background-color: #527464;

            color: white;

            border: none;

            padding: 10px 18px;

            border-radius: 6px;

            cursor: pointer;

            font-size: 14px;
        }

        .btn:hover {
            background-color: #3d5b4d;
        }

        .back {
            margin-top: 25px;
            text-align: center;
        }

        .back-link {
            display: inline-block;

            color: #527464;

            font-size: 13px;
        }

        .back-link:hover {
            color: #9a742e;
        }

    </style>

</head>

<body>

<form method="post" action="">

<div class="page">

    <div class="page-header">

        <h1>Change Password</h1>

        <p>
            Update your seller account password.
        </p>

    </div>


    <div class="panel">

        <h2>Change Password</h2>

        <p class="sub">
            Enter your username and your new password.
        </p>


        <div class="field">

            <label for="username">
                Username
            </label>

            <input
                type="text"
                id="username"
                name="username"
            >

        </div>


        <div class="field">

            <label for="password">
                New Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
            >

        </div>


        <input
            type="submit"
            name="action"
            value="Save Password"
            class="btn"
        >

    </div>


    <!-- Back to Seller Dashboard -->

    <div class="back">

        <a href="sellerpage.php"
           class="back-link">
            &larr; Back to Seller Dashboard
        </a>

    </div>

</div>

</form>

</body>

</html>
<?php
// include __DIR__ . "/../Controller/changePasswordController.php";
?>

<!DOCTYPE html>
<html>

<head>

    <title>Change Password</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f3ef;
        }

        .password-page {
            min-height: 100vh;

            padding: 27px 63px;
        }

        .title {
            width: 440px;
            height: 62px;

            margin: 0 auto 129px auto;

            background: linear-gradient(135deg, #6b705c, #a5a58d);

            color: white;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;
        }

        .title h1 {
            font-size: 28px;

            font-weight: normal;
        }

        .password-form {
            width: 600px;

            margin-left: 38px;
        }

        .form-row {
            display: flex;

            align-items: center;

            margin-bottom: 25px;
        }

        .form-row label {
            width: 275px;

            text-align: right;

            padding-right: 20px;

            font-size: 27px;

            color: #34495e;
        }

        .form-row input {
            width: 295px;
            height: 46px;

            border: 1px solid #ddd;

            border-radius: 6px;

            background-color: white;

            padding: 5px;

            font-size: 18px;
        }

        .save {
            margin-top: 98px;

            margin-left: 286px;
        }

        .save-button {
            width: 214px;
            height: 44px;

            border: none;

            border-radius: 7px;

            background: linear-gradient(135deg, #6b705c, #a5a58d);

            color: white;

            font-size: 24px;

            cursor: pointer;
        }

        .save-button:hover {
            opacity: 0.9;
        }

        .back {
            display: flex;

            justify-content: flex-end;

            margin-top: 296px;
        }

        .back-button {
            width: 214px;
            height: 45px;

            border: none;

            border-radius: 7px;

            background-color: #5f6f52;

            color: white;

            font-size: 14px;

            cursor: pointer;
        }

        .back-button:hover {
            background-color: #4d5b43;
        }

    </style>

</head>


<body>

<form method="post" action="">

    <div class="password-page">


        <div class="title">

            <h1>Change password</h1>

        </div>


        <div class="password-form">


            <div class="form-row">

                <label for="username">
                    Username :
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                >

            </div>


            <div class="form-row">

                <label for="password">
                    New password:
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                >

            </div>


            <div class="save">

                <input
                    type="submit"
                    name="action"
                    value="Save"
                    class="save-button"
                >

            </div>


        </div>


        <div class="back">

            <input
                type="submit"
                name="action"
                value="Back to seller page"
                class="back-button"
            >

        </div>


    </div>

</form>

</body>

</html>
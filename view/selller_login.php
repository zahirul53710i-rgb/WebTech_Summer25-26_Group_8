<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Seller Login</title>

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

            padding: 20px;

            line-height: 1.5;
        }

        .wrap {

            max-width: 700px;

            margin: 40px auto;

            background-color: #ffffff;

            padding: 30px;

            border-radius: 16px;

            border: 1px solid #e2ddd3;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, 0.05);
        }

        .panel {
            width: 100%;
        }

        h1 {

            color: #2c4238;

            text-align: center;

            margin-bottom: 30px;

            font-size: 26px;

            font-family: Georgia, serif;
        }

        .field {

            margin-bottom: 20px;
        }

        .field label {

            display: block;

            color: #2c4238;

            font-size: 16px;

            font-weight: bold;

            margin-bottom: 7px;
        }

        .field input[type="text"],
        .field input[type="password"] {

            width: 100%;

            padding: 10px 12px;

            border: 1px solid #ccc;

            border-radius: 8px;

            background-color: #ffffff;

            font-size: 14px;

            font-family: Arial, Helvetica, sans-serif;

            color: #2c4238;

            outline: none;

            transition: border-color 0.2s ease;
        }

        .field input[type="text"]:focus,
        .field input[type="password"]:focus {

            border-color: #4d6b5e;
        }

        .remember {

            display: flex;

            align-items: center;

            gap: 8px;

            margin-bottom: 15px;
        }

        .remember input {

            width: auto;
        }

        .remember label {

            margin-bottom: 0;

            cursor: pointer;
        }

        .buttons {

            display: flex;

            gap: 10px;

            margin-top: 15px;
        }

        .btn {

            flex: 1;

            background-color: #4d6b5e;

            color: white;

            padding: 12px 15px;

            border-radius: 8px;

            border: none;

            font-family: Arial, Helvetica, sans-serif;

            font-weight: bold;

            font-size: 15px;

            cursor: pointer;

            transition: background-color 0.2s ease;
        }

        .btn:hover {

            background-color: #3c5449;
        }

        .btn-secondary {

            background-color: #6c757d;
        }

        .btn-secondary:hover {

            background-color: #5a6268;
        }

        .form-foot {

            text-align: center;

            margin-top: 20px;

            font-size: 15px;

            color: #2c4238;
        }

        .form-foot a {

            color: #4d6b5e;

            text-decoration: none;

            font-weight: bold;
        }

        .form-foot a:hover {

            color: #2c4238;

            text-decoration: underline;
        }

        .back-home {

            text-align: center;

            margin-top: 15px;

            font-size: 14px;
        }

        .back-home a {

            color: #4d6b5e;

            text-decoration: none;

            font-weight: bold;
        }

        .back-home a:hover {

            color: #2c4238;

            text-decoration: underline;
        }

    </style>


    <script>

        function sellerLogin()
        {

            let username =
                document.getElementById("name").value.trim();

            let password =
                document.getElementById("password").value.trim();

            let valid = true;

            let message = "";


            if(username == "")
            {
                message += "Username is Required\n";

                valid = false;
            }


            if(username.length < 5 && username != "")
            {
                message +=
                    "Username Should be at least 5 Characters\n";

                valid = false;
            }


            if(password == "")
            {
                message += "Password is Required\n";

                valid = false;
            }


            if(password.length < 5 && password != "")
            {
                message +=
                    "Password Must be at least 5 Characters\n";

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


<div class="wrap">


    <div class="panel">


        <h1>
            Seller Login Form
        </h1>


        <form
            method="post"
            action="../controller/seller/seller_login_validation.php"
            onsubmit="return sellerLogin()"
        >


            <!-- Username -->

            <div class="field">

                <label for="name">
                    User Name:
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter User Name"
                >

            </div>


            <!-- Password -->

            <div class="field">

                <label for="password">
                    Password:
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter Password"
                >

            </div>


            <!-- Remember Me -->

            <div class="remember">

                <input
                    type="checkbox"
                    id="remember"
                    name="remember"
                    value="1"
                >

                <label for="remember">
                    Remember Me
                </label>

            </div>


            <!-- Buttons -->

            <div class="buttons">

                <button
                    type="submit"
                    class="btn"
                >
                    LogIn
                </button>


                <button
                    type="reset"
                    class="btn btn-secondary"
                >
                    Reset
                </button>

            </div>


        </form>


        <!-- Registration Link -->

        <div class="form-foot">

            <p>

                Don't have an account?

                <a href="seller_registration.php">
                    Register here
                </a>

            </p>

        </div>


        <!-- Back -->

        <div class="back-home">

            <a href="dashboard.php">
                ← Back to HaatBodol
            </a>

        </div>


    </div>

</div>


</body>

</html>
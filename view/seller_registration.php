<?php

include "../controller/seller/seller_registration_validation.php";

?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Seller Registration</title>

    <script>

        function collect_data()
        {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let address = document.getElementById("address").value.trim();
            let dob = document.getElementById("dob").value.trim();
            let file = document.getElementById("file").value.trim();
            let username = document.getElementById("username").value.trim();
            let password = document.getElementById("password").value.trim();
            let confirm_password = document.getElementById("confirm_password").value.trim();

            let valid = true;
            let message = "";



            if(name.length < 5)
            {
                message += "Name Should be at least 5 Characters\n";
                valid = false;
            }


            if(email.length < 5)
            {
                message += "Email Should be at least 5 Characters\n";
                valid = false;
            }


            if(phone.length < 11)
            {
                message += "Phone Number Should be at least 11 Characters\n";
                valid = false;
            }


            if(address.length < 5)
            {
                message += "Address Should be at least 5 Characters\n";
                valid = false;
            }


            if(dob == "")
            {
                message += "Date of Birth is Required\n";
                valid = false;
            }


            if(file == "")
            {
                message += "Profile Photo is Required\n";
                valid = false;
            }


            if(username.length < 5)
            {
                message += "User Name Should be at least 5 Characters\n";
                valid = false;
            }


            if(password.length < 5)
            {
                message += "Password Must be at least 5 Characters\n";
                valid = false;
            }


            if(confirm_password.length < 5)
            {
                message += "Confirm Password Must be at least 5 Characters\n";
                valid = false;
            }


            if(password != confirm_password)
            {
                message += "Password and Confirm Password Must Match\n";
                valid = false;
            }


            if(!valid)
            {
                alert(message);
            }


            return valid;
        }

    </script>


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


        .container {
            max-width: 700px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }


        h1 {
            color: #2c4238;
            text-align: center;
            margin-bottom: 30px;
            font-size: 26px;
            font-family: Georgia, serif;
        }


        form {
            display: flex;
        }


        fieldset {
            width: 100%;
            border: 1px solid #e2ddd3;
            border-radius: 12px;
            padding: 20px;
            background-color: #ffffff;
        }


        legend {
            padding: 0 10px;
            color: #2c4238;
            font-weight: bold;
            font-size: 20px;
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
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }


        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="file"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #ffffff;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            color: #2c4238;
            outline: none;
            transition: border-color 0.2s ease;
        }


        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        input[type="password"]:focus,
        textarea:focus {
            border-color: #4d6b5e;
        }


        textarea {
            resize: none;
        }


        input[type="submit"] {
            background-color: #4d6b5e;
            color: white;
            padding: 12px 15px;
            width: 100%;
            border-radius: 8px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            margin-top: 5px;
            transition: background-color 0.2s ease;
        }


        input[type="submit"]:hover {
            background-color: #3c5449;
        }


        input[type="reset"] {
            background-color: #e2ddd3;
            color: #2c4238;
            padding: 12px 15px;
            width: 100%;
            border-radius: 8px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            margin-top: 5px;
            transition: background-color 0.2s ease;
        }


        input[type="reset"]:hover {
            background-color: #d1cbbd;
        }


        .link {
            text-align: center;
            margin-top: 15px;
            font-size: 15px;
            color: #2c4238;
        }


        .link a {
            color: #4d6b5e;
            text-decoration: none;
            font-weight: bold;
        }


        .link a:hover {
            color: #2c4238;
            text-decoration: underline;
        }

    </style>

</head>


<body>

    <div class="container">

        <h1>Seller Registration</h1>


        <form
            enctype="multipart/form-data"
            method="post"
            action="../controller/seller/seller_registration_validation.php"
            onsubmit="return collect_data()"
        >

            <fieldset>

                <legend>Seller Information</legend>

                <table>


                    <tr>

                        <td>
                            <label for="name">Name:</label>
                        </td>

                        <td>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your Name"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="email">Email:</label>
                        </td>

                        <td>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your Email"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="phone">Phone No:</label>
                        </td>

                        <td>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="Enter your Phone Number"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="address">Address:</label>
                        </td>

                        <td>
                            <textarea
                                id="address"
                                name="address"
                                rows="5"
                                placeholder="Enter your Address"
                            ></textarea>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="dob">Date of Birth:</label>
                        </td>

                        <td>
                            <input
                                type="date"
                                id="dob"
                                name="dob"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="file">Profile Photo:</label>
                        </td>

                        <td>
                            <input
                                type="file"
                                name="file"
                                id="file"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="username">Username:</label>
                        </td>

                        <td>
                            <input
                                type="text"
                                id="username"
                                name="username"
                                placeholder="Create your Username"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="password">Password:</label>
                        </td>

                        <td>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Create your Password"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <label for="confirm_password">
                                Confirm Password:
                            </label>
                        </td>

                        <td>
                            <input
                                type="password"
                                id="confirm_password"
                                name="confirm_password"
                                placeholder="Confirm your Password"
                            >
                        </td>

                    </tr>


                    <tr>

                        <td colspan="2">

                            <input
                                type="submit"
                                id="submit"
                                name="submit"
                                value="Create"
                            >

                        </td>

                    </tr>


                    <tr>

                        <td colspan="2">

                            <input
                                type="reset"
                                id="reset"
                                name="reset"
                                value="Reset"
                            >

                        </td>

                    </tr>


                    <tr>

                        <td colspan="2">

                            <div class="link">

                                Already have an account?

                                <a href="selller_login.php">
                                    Sign In
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
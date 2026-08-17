<?php
include "../Controller/RegistrationValidation.php";
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Buyer Registration</title>

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
            max-width: 700px;
            margin: 40px auto;
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
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="file"],
        textarea{
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid;
            border-radius: 10px;
            background-color: white;
            font-size: 14px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        textarea{
            resize: none;
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

        <h1>Buyer Registration</h1>

        <form enctype="multipart/form-data" method="post" action="">

            <fieldset>

                <legend>Buyer Information</legend>

                <table>

                    <!-- Name -->

                    <tr>

                        <td>
                            <label for="name">Name:</label>
                        </td>

                        <td>
                            <input type="text"
                                   id="name"
                                   name="name"
                                   placeholder="Enter your Name">
                        </td>

                    </tr>


                    <!-- Email -->

                    <tr>

                        <td>
                            <label for="email">Email:</label>
                        </td>

                        <td>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   placeholder="Enter your Email">
                        </td>

                    </tr>


                    <!-- Phone Number -->

                    <tr>

                        <td>
                            <label for="phone">Phone No:</label>
                        </td>

                        <td>
                            <input type="tel"
                                   id="phone"
                                   name="phone"
                                   placeholder="Enter your Phone Number">
                        </td>

                    </tr>


                    <!-- Address -->

                    <tr>

                        <td>
                            <label for="address">Address:</label>
                        </td>

                        <td>
                            <textarea id="address"
                                      name="address"
                                      rows="5"
                                      placeholder="Enter your Address"></textarea>
                        </td>

                    </tr>


                    <!-- Date of Birth -->

                    <tr>

                        <td>
                            <label for="dob">Date of Birth:</label>
                        </td>

                        <td>
                            <input type="date"
                                   id="dob"
                                   name="dob">
                        </td>

                    </tr>


                    <!-- Profile Photo -->

                    <tr>

                        <td>
                            <label for="file">Profile Photo:</label>
                        </td>

                        <td>
                            <input type="file"
                                   name="file"
                                   id="file">
                        </td>

                    </tr>


                    <!-- Create Button -->

                    <tr>

                        <td colspan="2">

                            <input type="submit"
                                   id="submit"
                                   name="submit"
                                   value="Create">

                        </td>

                    </tr>


                    <!-- Reset Button -->

                    <tr>

                        <td colspan="2">

                            <input type="reset"
                                   id="reset"
                                   name="reset"
                                   value="Reset">

                        </td>

                    </tr>


                    <!-- Login -->

                    <tr>

                        <td colspan="2">

                            <div class="link">

                                Already have an account?
                                <a href="userlogin.php">Login</a>

                            </div>

                        </td>

                    </tr>

                </table>

            </fieldset>

        </form>

    </div>

</body>

</html>
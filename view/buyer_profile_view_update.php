<?php
// PHP code can be added here later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Buyer Profile</title>

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
            max-width: 650px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 20px 20px;
        }

        h1{
            color: blue;
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
        }

        fieldset{
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
            padding: 10px;
            font-size: 17px;
        }

        .title{
            font-weight: bold;
            width: 35%;
        }

        .photo{
            text-align: center;
            padding: 15px;
        }

        .photo img{
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid black;
        }

        input[type="button"]{
            background-color: red;
            color: white;
            padding: 12px 15px;
            width: 100%;
            border-radius: 10px;
            border: none;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="button"]:hover{
            background-color: green;
        }

        .link{
            text-align: center;
            margin-top: 15px;
        }

        .link a{
            color: blue;
            text-decoration: none;
            font-size: 17px;
        }

        .link a:hover{
            text-decoration: underline;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>Buyer Profile</h1>

        <fieldset>

            <legend>Personal Information</legend>

            <table>

                <!-- Profile Photo -->

                <tr>

                    <td colspan="2" class="photo">

                        <img src="../Images/profile.jpg"
                             alt="Profile Photo">

                    </td>

                </tr>


                <!-- Name -->

                <tr>

                    <td class="title">
                        Name:
                    </td>

                    <td>
                        
                    </td>

                </tr>


                <!-- Email -->

                <tr>

                    <td class="title">
                        Email:
                    </td>

                    <td>
                        
                    </td>

                </tr>


                <!-- Phone -->

                <tr>

                    <td class="title">
                        Phone No:
                    </td>

                    <td>
                        
                    </td>

                </tr>


                <!-- Address -->

                <tr>

                    <td class="title">
                        Address:
                    </td>

                    <td>
                        
                    </td>

                </tr>


                <!-- Date of Birth -->

                <tr>

                    <td class="title">
                        Date of Birth:
                    </td>

                    <td>
                        
                    </td>

                </tr>


                <!-- Edit Profile -->

                <tr>

                    <td colspan="2">

                        <input type="button"
                               value="Edit Profile"
                               onclick="location.href='buyer_update.php'">

                    </td>

                </tr>


                <!-- Order History -->

                <tr>

                    <td colspan="2">

                        <input type="button"
                               value="Order History"
                               onclick="location.href='buyer_order_history.php'">

                    </td>

                </tr>

            </table>


            <div class="link">

                <a href="buyer_login.php">
                    Logout
                </a>

            </div>

        </fieldset>

    </div>

</body>

</html>
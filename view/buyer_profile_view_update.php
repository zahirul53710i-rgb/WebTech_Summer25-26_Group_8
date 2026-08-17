<?php
// PHP code can be added here later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Buyer Profile</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f0ea; /* সফট অফ-হোয়াইট ব্যাকগ্রাউন্ড */
            color: #2c4238;
            padding: 20px;
            line-height: 1.5;
        }

        .container {
            max-width: 650px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #2c4238; /* ডিপ গ্রিন হেডার */
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
            font-family: Georgia, serif;
        }

        fieldset {
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
            padding: 10px;
            font-size: 16px;
            color: #2c4238;
        }

        .title {
            font-weight: bold;
            width: 35%;
            color: #2c4238;
        }

        .photo {
            text-align: center;
            padding: 15px;
        }

        .photo img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #4d6b5e; /* গ্রিন বর্ডার */
            object-fit: cover;
        }

        input[type="button"] {
            background-color: #4d6b5e; /* সবুজ বাটন */
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

        input[type="button"]:hover {
            background-color: #3c5449; /* ডার্ক গ্রিন হোভার */
        }

        .link {
            text-align: center;
            margin-top: 20px;
        }

        .link a {
            color: #4d6b5e;
            text-decoration: none;
            font-size: 16px;
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

        <h1>Buyer Profile</h1>

        <fieldset>

            <legend>Personal Information</legend>

            <table>

                <!-- Profile Photo -->
                <tr>
                    <td colspan="2" class="photo">
                        <img src="../Images/profile.jpg" alt="Profile Photo">
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
                               onclick="location.href='order_history.php'">
                    </td>
                </tr>

            </table>

            <div class="link">
                <a href="userlogin.php">
                    Logout
                </a>
            </div>

        </fieldset>

    </div>

</body>

</html>
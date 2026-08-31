<?php
// PHP Page Header Configuration
$pageTitle = "HaatBodol - Select Role";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <!-- Page CSS Styling -->
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

        .container {
            width: 90%;
            max-width: 440px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

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
            padding: 18px;
            background-color: #ffffff;
            margin-bottom: 20px;
        }

        legend {
            padding: 0 10px;
            color: #2c4238;
            font-weight: bold;
            font-size: 16px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 6px 0;
        }

        label {
            display: inline-block;
            color: #2c4238;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        p {
            font-size: 13px;
            color: #555;
            margin-bottom: 10px;
        }

        input[type="button"],
        input[type="submit"],
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

        input[type="button"]:hover,
        input[type="submit"]:hover {
            background-color: #3c5449;
        }

        input[type="reset"] {
            background-color: #8c8275; 
        }

        input[type="reset"]:hover {
            background-color: #736a5e;
        }

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
    </style>

    <!-- JavaScript Navigation -->
    <script>
        function navigateTo(url) {
            if (url !== '') {
                window.location.href = url;
            } else {
                alert('Page location not set.');
            }
        }
    </script>
</head>
<body>

    <div class="container">
        <h1>HaatBodol</h1>

        <!-- Counter 01: Admin -->
        <fieldset>
            <legend>COUNTER No. 01</legend>
            <table>
                <tr>
                    <td>
                        <label>Admin Panel</label>
                        <p>Manage users, approve seller listings and handle buying requests.</p>
                        <input type="button" value="Enter as Admin" onclick="navigateTo('login_admin.php')">
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Counter 02: Buyer -->
        <fieldset>
            <legend>COUNTER No. 02</legend>
            <table>
                <tr>
                    <td>
                        <label>Buyer Portal</label>
                        <p>Browse approved products, place orders and track your purchases.</p>
                        <input type="button" value="Enter as Buyer" onclick="navigateTo('userlogin.php')">
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Counter 03: Seller -->
        <fieldset>
            <legend>COUNTER No. 03</legend>
            <table>
                <tr>
                    <td>
                        <label>Seller Station</label>
                        <p>Add your collectible items and submit them for admin approval.</p>
                        <input type="button" value="Enter as Seller" onclick="navigateTo('selller_login.php')">
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Counter 04: Delivery -->
        <fieldset>
            <legend>COUNTER No. 04</legend>
            <table>
                <tr>
                    <td>
                        <label>Delivery Hub</label>
                        <p>Handle approved parcels and deliver them safely to the buyer.</p>
                        <input type="button" value="Enter as Delivery" onclick="navigateTo('registration.php')">
                    </td>
                </tr>
            </table>
        </fieldset>

    </div>

</body>
</html>
<?php
// PHP code can be added here later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Order History</title>

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
            max-width: 850px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #2c4238; 
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
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background-color: #4d6b5e;
            color: white;
            padding: 12px;
            font-weight: bold;
            text-align: center;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e2ddd3;
            color: #2c4238;
            font-size: 15px;
        }

        tr:nth-child(even) {
            background-color: #fbf9f5; 
        }

        input[type="button"] {
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

        input[type="button"]:hover {
            background-color: #3c5449;
        }

        .link {
            text-align: center;
            margin-top: 25px;
        }

        .link a {
            color: #4d6b5e;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            margin: 0 15px;
        }

        .link a:hover {
            color: #2c4238;
            text-decoration: underline;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>Order History</h1>

        <fieldset>

            <legend>My Previous Orders</legend>

            <table>

                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- ডামি ডেটা উদাহরণ (প্রয়োজনে বাদ দিতে পারেন) -->
                    <tr>
                        <td>#101</td>
                        <td>Medicine A</td>
                        <td>2026-08-15</td>
                        <td>500 BDT</td>
                        <td>Delivered</td>
                    </tr>
                </tbody>

            </table>

            <div class="link">

                <a href="cart.php">
                    Go to Cart
                </a>

                <a href="buyer_profile_view_update.php">
                    Back to Profile
                </a>

                <a href="review.php">
                    Give Review
                </a>

            </div>

        </fieldset>

    </div>

</body>

</html>
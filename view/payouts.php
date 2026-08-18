<?php
// include __DIR__ . "/../Controller/payoutController.php";

// Later:
// $totalSale = getDeliveredSales();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payouts</title>

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

        .payout-box {
            background-color: #fffdf8;

            min-height: 400px;

            padding: 50px;

            border: 1px solid #ddd5c5;
            border-radius: 12px;

            box-shadow: 0 4px 10px rgba(50, 45, 35, 0.07);

            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .total-sell {
            width: 100%;
            max-width: 600px;

            display: flex;
            align-items: center;
            gap: 25px;
        }

        .total-sell label {
            color: #263f35;

            font-family: Georgia, serif;

            font-size: 24px;
        }

        .total-sell input {
            flex: 1;

            padding: 12px;

            border: 1px solid #ddd5c5;
            border-radius: 6px;

            background-color: #f5f1e8;

            color: #9a742e;

            font-size: 20px;
            font-weight: bold;
        }

        .back {
            margin-top: 25px;
            text-align: right;
        }

        .admin-button {
            display: inline-block;
            background-color: #527464;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
        }

        .admin-button:hover {
            background-color: #3d5b4d;
        }

        @media screen and (max-width: 700px) {

            .payout-box {
                padding: 30px 20px;
            }

            .total-sell {
                display: block;
            }

            .total-sell label {
                display: block;
                margin-bottom: 10px;
            }

            .total-sell input {
                width: 100%;
            }

        }

    </style>

</head>

<body>

<div class="page">

    <div class="page-header">

        <h1>Payouts</h1>

        <p>
            View your total sales from delivered products.
        </p>

    </div>


    <?php

    /*
     * Later:
     *
     * $totalSale = getDeliveredSales();
     */

    $totalSale = 0;

    ?>


    <div class="payout-box">

        <div class="total-sell">

            <label>
                Total Sale:
            </label>

            <input
                type="text"
                name="total_sell"
                value="৳<?php echo number_format($totalSale, 2); ?>"
                readonly
            >

        </div>

    </div>


    <!-- BACK TO SELLER DASHBOARD -->

    <div class="back">

        <a href="sellerpage.php"
           class="admin-button">
            &larr; Back to Seller Dashboard
        </a>

    </div>

</div>

</body>

</html>
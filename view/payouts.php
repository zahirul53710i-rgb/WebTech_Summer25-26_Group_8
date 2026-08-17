<?php
// include __DIR__ . "/../Controller/payoutController.php";

// Later:
// $totalSale = getDeliveredSales();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Payout</title>

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

        .payout-page {
            min-height: 100vh;

            padding: 25px 63px;
        }

        .title {
            width: 455px;
            height: 68px;

            margin: 0 auto 32px auto;

            background: linear-gradient(135deg, #d97706, #f0b429);

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

        .payout-box {
            width: 573px;
            height: 615px;

            margin: 0 auto;

            background-color: white;

            border-radius: 12px;

            box-shadow: 0 4px 15px rgba(0,0,0,0.08);

            display: flex;

            justify-content: center;

            padding-top: 112px;
        }

        .total-sell {
            display: flex;

            align-items: center;

            gap: 68px;
        }

        .total-sell label {
            font-size: 28px;

            color: #34495e;
        }

        .total-sell input {
            width: 219px;
            height: 40px;

            border: none;

            border-radius: 6px;

            background-color: #fff3cd;

            color: #b45309;

            font-size: 20px;

            font-weight: bold;

            padding: 5px;
        }

        .back {
            display: flex;

            justify-content: flex-end;

            margin-top: 64px;
        }

        .back-button {
            width: 223px;
            height: 42px;

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

    <div class="payout-page">


        <div class="title">

            <h1>Payout</h1>

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
                    Total sell:
                </label>

                <input
                    type="text"
                    name="total_sell"
                    value="৳<?php echo number_format($totalSale, 2); ?>"
                    readonly
                >

            </div>

        </div>


        <div class="back">

            <input
                type="submit"
                name="page"
                value="Back to seller page"
                class="back-button"
            >

        </div>


    </div>

</form>

</body>

</html>
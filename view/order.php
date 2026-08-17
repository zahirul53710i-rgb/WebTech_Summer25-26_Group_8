<?php
// include __DIR__ . "/../Controller/orderController.php";

// Later:
// $orders = getSellerOrders();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Orders</title>

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

        .orders-page {
            min-height: 100vh;

            padding: 25px 40px;
        }

        .title {
            width: 272px;
            height: 58px;

            margin: 0 auto 58px auto;

            background: linear-gradient(135deg, #8c6b43, #c49a6c);

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

        .orders {
            display: grid;

            grid-template-columns: 1fr 1fr;

            column-gap: 54px;

            row-gap: 10px;
        }

        .order {
            min-height: 108px;

            background-color: white;

            border-radius: 9px;

            border-left: 5px solid #8c6b43;

            padding: 10px;

            box-shadow: 0 3px 10px rgba(0,0,0,0.07);
        }

        .order p {
            font-size: 16px;

            line-height: 21px;

            color: #34495e;
        }

        .order-id {
            color: #8c6b43 !important;

            font-weight: bold;

            margin-bottom: 4px;
        }

        .empty {
            grid-column: 1 / 3;

            text-align: center;

            padding: 60px;

            color: #888;

            font-size: 18px;
        }

        .back {
            display: flex;

            justify-content: flex-end;

            margin-top: 25px;
        }

        .back-button {
            width: 220px;
            height: 42px;

            border: none;

            border-radius: 7px;

            background-color: #5f6f52;

            color: white;

            cursor: pointer;
        }

    </style>

</head>


<body>

<form method="post" action="">

    <div class="orders-page">


        <div class="title">

            <h1>Orders</h1>

        </div>


        <div class="orders">


            <?php

            /*
             * Backend will provide orders later.
             */

            $orders = [];

            ?>


            <?php if (empty($orders)) { ?>

                <div class="empty">

                    No orders yet.

                </div>

            <?php } else { ?>


                <?php foreach ($orders as $order) { ?>

                    <div class="order">

                        <p class="order-id">
                            #Order ID:
                            <?php echo htmlspecialchars($order["id"]); ?>
                        </p>

                        <p>
                            Order details:
                            <?php echo htmlspecialchars($order["details"]); ?>
                        </p>

                        <p>
                            Receiver address:
                            <?php echo htmlspecialchars($order["address"]); ?>
                        </p>

                        <p>
                            Receiver phone number:
                            <?php echo htmlspecialchars($order["phone"]); ?>
                        </p>

                    </div>

                <?php } ?>


            <?php } ?>


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
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Orders</title>

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

        .orders {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .order {
            background-color: #fffdf8;

            padding: 20px;

            border: 1px solid #ddd5c5;
            border-left: 5px solid #527464;

            border-radius: 10px;

            box-shadow: 0 4px 10px rgba(50, 45, 35, 0.07);
        }

        .order:hover {
            border-left-color: #c5a45d;
        }

        .order p {
            color: #62665e;
            font-size: 14px;
            margin-bottom: 6px;
        }

        .order-id {
            color: #527464 !important;
            font-weight: bold;
            margin-bottom: 10px !important;
        }

        .empty {
            grid-column: 1 / 3;

            text-align: center;

            background-color: #fffdf8;

            padding: 70px 20px;

            border: 1px solid #ddd5c5;
            border-radius: 12px;

            color: #777267;
        }

        .empty h2 {
            font-family: Georgia, serif;
            font-weight: normal;
            color: #263f35;
            margin-bottom: 5px;
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

            .orders {
                grid-template-columns: 1fr;
            }

            .empty {
                grid-column: 1;
            }

        }

    </style>

</head>

<body>

<div class="page">

    <div class="page-header">

        <h1>Orders</h1>

        <p>
            View orders placed for your products.
        </p>

    </div>


    <div class="orders">

        <?php

        $orders = [];

        ?>


        <?php if (empty($orders)) { ?>

            <div class="empty">

                <h2>No Orders Yet</h2>

                <p>
                    Your orders will appear here when buyers place them.
                </p>

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

        <a href="sellerpage.php"
           class="admin-button">
            &larr; Back to Seller Dashboard
        </a>

    </div>

</div>

</body>

</html>
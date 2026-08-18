<?php
// include __DIR__ . "/../Controller/productController.php";

// Later:
// $products = getSellerProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Products</title>

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

        .products {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .product {
            min-height: 180px;

            background-color: #fffdf8;

            border: 1px solid #ddd5c5;
            border-radius: 12px;

            padding: 20px;

            box-shadow: 0 4px 10px rgba(50, 45, 35, 0.07);

            display: flex;
            align-items: center;
            gap: 20px;
        }

        .product:hover {
            border-color: #c5a45d;
            box-shadow: 0 6px 15px rgba(50, 45, 35, 0.12);
        }

        .product-picture {
            width: 150px;
            height: 120px;

            background-color: #f5f1e8;

            border: 1px solid #ddd5c5;
            border-radius: 8px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #777267;
            flex-shrink: 0;
        }

        .product-info {
            flex: 1;
        }

        .product-name {
            font-family: Georgia, serif;
            font-size: 22px;
            color: #263f35;
            margin-bottom: 10px;
        }

        .quantity {
            color: #62665e;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .price {
            color: #9a742e;
            font-size: 18px;
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

        .empty {
            grid-column: 1 / 3;

            text-align: center;
            padding: 60px;

            background-color: #fffdf8;
            border: 1px solid #ddd5c5;
            border-radius: 12px;

            color: #777267;
        }

        @media screen and (max-width: 700px) {

            .products {
                grid-template-columns: 1fr;
            }

            .empty {
                grid-column: 1;
            }

            .product {
                flex-direction: column;
                text-align: center;
            }

        }

    </style>

</head>

<body>

<div class="page">

    <div class="page-header">

        <h1>My Products</h1>

        <p>
            View and manage the products currently listed in your store.
        </p>

    </div>


    <div class="products">

        <?php

        /*
         * Products will be generated here
         * from the backend later.
         *
         * Example:
         *
         * foreach ($products as $product) {
         *
         *     // product HTML
         *
         * }
         */

        ?>

        <!-- Empty for now -->

        <div class="empty">
            No products available yet.
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
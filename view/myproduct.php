<?php
// include __DIR__ . "/../Controller/productController.php";

// Later:
// $products = getSellerProducts();
?>

<!DOCTYPE html>
<html>

<head>

    <title>My Products</title>

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

        .page {
            min-height: 100vh;
            padding: 25px;
        }

        /* Title */

        .title {
            width: 365px;
            height: 70px;

            margin: 0 auto 35px auto;

            background: linear-gradient(135deg, #6b705c, #a5a58d);

            color: white;

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .title h1 {
            font-size: 22px;
            font-weight: normal;
        }

        /* Products */

        .products {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 12px 30px;
        }

        /* Backend will create product cards here */

        .product {
            height: 158px;

            background-color: white;

            border-radius: 10px;

            border-left: 5px solid #a5a58d;

            position: relative;

            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .product-name {
            position: absolute;

            left: 30px;
            top: 65px;

            color: #3d3d3d;

            font-size: 16px;
        }

        .product-picture {
            width: 203px;
            height: 109px;

            background: #e9e6df;

            position: absolute;

            right: 20px;
            top: 9px;

            border-radius: 7px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #777;
        }

        .quantity {
            position: absolute;

            left: 178px;
            bottom: 7px;

            color: #555;
        }

        .price {
            position: absolute;

            left: 384px;
            bottom: 7px;

            color: #a05a00;

            font-weight: bold;
        }

        /* Back */

        .back {
            margin-top: 18px;

            display: flex;

            justify-content: flex-end;
        }

        .back-button {
            width: 265px;
            height: 42px;

            border: none;

            border-radius: 7px;

            background-color: #5f6f52;

            color: white;

            font-size: 16px;

            cursor: pointer;
        }

        .back-button:hover {
            background-color: #4d5b43;
        }

    </style>

</head>


<body>

<form method="post" action="">

    <div class="page">


        <div class="title">

            <h1>Your Products</h1>

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
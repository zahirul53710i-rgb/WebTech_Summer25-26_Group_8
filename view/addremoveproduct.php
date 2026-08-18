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

    <title>Add / Remove Product</title>

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

        .main-area {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .section {
            background-color: #fffdf8;
            padding: 25px;

            border: 1px solid #ddd5c5;
            border-radius: 12px;

            box-shadow: 0 4px 10px rgba(50, 45, 35, 0.07);
        }

        .section h2 {
            font-family: Georgia, serif;
            font-weight: normal;
            color: #263f35;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .field {
            margin-bottom: 15px;
        }

        .field label {
            display: block;
            color: #263f35;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .field input {
            width: 100%;
            padding: 10px;

            border: 1px solid #ddd5c5;
            border-radius: 6px;

            background-color: #f5f1e8;
            color: #26332d;
        }

        .field input:focus {
            outline: none;
            border-color: #527464;
        }

        .btn {
            display: inline-block;
            width: 100%;

            background-color: #527464;
            color: white;

            border: none;
            padding: 10px 18px;

            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #3d5b4d;
        }

        .search {
            width: 100%;
            padding: 10px;

            border: 1px solid #ddd5c5;
            border-radius: 6px;

            background-color: #f5f1e8;

            margin-bottom: 15px;
        }

        .search:focus {
            outline: none;
            border-color: #527464;
        }

        .product-list {
            min-height: 350px;

            background-color: #f5f1e8;

            border: 1px solid #ddd5c5;
            border-radius: 8px;

            padding: 15px;
        }

        .product {
            background-color: #fffdf8;

            border: 1px solid #ddd5c5;
            border-radius: 7px;

            padding: 12px;

            margin-bottom: 10px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-name {
            color: #263f35;
            font-weight: bold;
        }

        .product-checkbox {
            width: 18px;
            height: 18px;
        }

        .remove-button {
            margin-top: 15px;

            display: inline-block;
            width: 100%;

            background-color: #a85c4a;
            color: white;

            border: none;
            padding: 10px;

            border-radius: 6px;
            cursor: pointer;
        }

        .remove-button:hover {
            background-color: #8d493a;
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

            .main-area {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

<form method="post" action="" enctype="multipart/form-data">

<div class="page">

    <div class="page-header">

        <h1>Add / Remove Products</h1>

        <p>
            Add new products or remove products from your store.
        </p>

    </div>


    <div class="main-area">


        <!-- ADD PRODUCT -->

        <div class="section">

            <h2>Add Product</h2>

            <div class="field">

                <label for="name">
                    Product Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                >

            </div>


            <div class="field">

                <label for="price">
                    Price
                </label>

                <input
                    type="number"
                    id="price"
                    name="price"
                >

            </div>


            <div class="field">

                <label for="quantity">
                    Quantity
                </label>

                <input
                    type="number"
                    id="quantity"
                    name="quantity"
                >

            </div>


            <div class="field">

                <label for="picture">
                    Picture
                </label>

                <input
                    type="file"
                    id="picture"
                    name="picture"
                >

            </div>


            <input
                type="submit"
                name="action"
                value="Add Product"
                class="btn"
            >

        </div>


        <!-- REMOVE PRODUCT -->

        <div class="section">

            <h2>Remove Product</h2>

            <input
                type="text"
                name="search"
                placeholder="Search for product"
                class="search"
            >


            <div class="product-list">

                <?php

                /*
                 * Backend will generate products here later.
                 */

                ?>

            </div>


            <input
                type="submit"
                name="action"
                value="Remove Selected"
                class="remove-button"
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

</form>

</body>

</html>
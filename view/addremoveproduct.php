<?php
// include __DIR__ . "/../Controller/productController.php";

// Later:
// $products = getSellerProducts();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Add/Remove Product</title>

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
            padding: 25px 40px;
        }

        /* Title */

        .title {
            width: 415px;
            height: 73px;

            margin: 0 auto 40px auto;

            background: linear-gradient(135deg, #c06c4f, #d99058);

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

        /* Add / Remove text */

        .top-text {
            display: flex;

            justify-content: space-between;

            padding: 0 160px;

            margin-bottom: 12px;
        }

        .top-text span {
            font-size: 18px;

            color: #555;

            cursor: default;
        }

        /* Main */

        .main-area {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 44px;
        }

        /* Add */

        .add-section {
            height: 198px;

            background-color: white;

            border-radius: 10px;

            padding: 40px 16px 10px 16px;

            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .fields {
            display: grid;

            grid-template-columns:
                1.2fr 1fr 1fr 1.2fr;

            gap: 13px;
        }

        .field label {
            display: block;

            text-align: center;

            color: #555;

            margin-bottom: 10px;
        }

        .field input {
            width: 100%;
            height: 39px;

            border: 1px solid #ddd;

            border-radius: 5px;

            padding: 5px;

            background-color: #f8f7f4;
        }

        .add-product {
            display: flex;

            justify-content: center;

            margin-top: 27px;
        }

        .add-product-button {
            width: 138px;
            height: 39px;

            border: none;

            border-radius: 6px;

            background-color: #6b705c;

            color: white;

            cursor: pointer;
        }

        .add-product-button:hover {
            background-color: #565a49;
        }

        /* Remove */

        .remove-section {
            min-height: 670px;

            background-color: white;

            border-radius: 10px;

            padding: 12px 16px 25px 16px;

            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .search {
            width: 283px;
            height: 38px;

            border: 1px solid #ddd;

            border-radius: 5px;

            padding: 8px;

            font-size: 16px;

            margin-bottom: 12px;
        }

        .product-list {
            background-color: #6b705c;

            padding: 10px;

            min-height: 578px;

            border-radius: 5px;
        }

        /* Backend will generate products here */

        .product {
            height: 98px;

            background-color: #f5f3ef;

            margin-bottom: 10px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 12px 25px 12px 16px;

            border-radius: 5px;
        }

        .product-name {
            width: 255px;
            height: 82px;

            background-color: #a5a58d;

            display: flex;

            align-items: center;

            justify-content: center;

            color: white;

            border-radius: 5px;
        }

        .product-checkbox {
            width: 25px;
            height: 25px;

            cursor: pointer;
        }

        /* Remove */

        .remove-button-area {
            display: flex;

            justify-content: flex-end;

            margin-top: 7px;
        }

        .remove-button {
            width: 118px;
            height: 39px;

            border: none;

            border-radius: 6px;

            background-color: #c0392b;

            color: white;

            cursor: pointer;
        }

        .remove-button:hover {
            background-color: #a93226;
        }

    </style>

</head>


<body>

<form method="post" action="" enctype="multipart/form-data">

    <div class="page">


        <div class="title">

            <h1>Add/Remove Product</h1>

        </div>


        <!-- These are TEXT, not buttons -->

        <div class="top-text">

            <span>Add</span>

            <span>Remove</span>

        </div>


        <div class="main-area">


            <!-- ADD -->

            <div class="add-section">

                <div class="fields">


                    <div class="field">

                        <label for="name">
                            Name
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


                </div>


                <div class="add-product">

                    <input
                        type="submit"
                        name="action"
                        value="Add product"
                        class="add-product-button"
                    >

                </div>

            </div>


            <!-- REMOVE -->

            <div class="remove-section">


                <input
                    type="text"
                    name="search"
                    placeholder="Search for product"
                    class="search"
                >


                <div class="product-list">

                    <?php

                    /*
                     * NOTHING IS HARDCODED HERE.
                     *
                     * Later the backend will do:
                     *
                     * foreach ($products as $product)
                     *
                     * and create:
                     *
                     * product name + checkbox
                     */

                    ?>

                </div>


                <div class="remove-button-area">

                    <input
                        type="submit"
                        name="action"
                        value="Remove"
                        class="remove-button"
                    >

                </div>


            </div>


        </div>

    </div>

</form>

</body>

</html>
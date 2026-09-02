<?php

session_start();

include "../model/seller/product_db.php";




if (
    !isset($_SESSION["seller_logged_in"]) ||
    $_SESSION["seller_logged_in"] !== true
)
{
    header("Location: selller_login.php");
    exit();
}


$username =
    $_SESSION["seller_username"] ?? "";




$database = new db();

$connection =
    $database->connection();

$products =
    $database->getProduct(
        $connection,
        $username
    );

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

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


        .message {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: bold;
        }


        .message.success {
            background-color: #d9ead3;
            color: #285943;
            border: 1px solid #a8c79e;
        }


        .message.error {
            background-color: #f4cccc;
            color: #8b2e2e;
            border: 1px solid #d99a9a;
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

            box-shadow:
                0 4px 10px
                rgba(50, 45, 35, 0.07);
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


        .btn:disabled,
        .remove-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
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
            max-height: 450px;
            overflow-y: auto;
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

            gap: 10px;
        }


        .product-info {
            display: flex;
            align-items: center;
            gap: 12px;
            flex: 1;
        }


        .product-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid #ddd5c5;
        }


        .product-details {
            display: flex;
            flex-direction: column;
        }


        .product-name {
            color: #263f35;
            font-weight: bold;
        }


        .product-price {
            color: #527464;
            font-size: 13px;
        }


        .product-quantity {
            color: #6c757d;
            font-size: 13px;
        }


        .product-checkbox {
            width: 18px;
            height: 18px;
            cursor: pointer;
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


        .no-products {
            text-align: center;
            color: #6c757d;
            padding: 30px 10px;
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


        @media screen and (max-width: 700px)
        {
            .main-area {
                grid-template-columns: 1fr;
            }
        }

    </style>

</head>


<body>


<div class="page">


   
    <div class="page-header">

        <h1>
            Add / Remove Products
        </h1>

        <p>
            Add new products or remove products from your store.
        </p>

    </div>


    
    <div
        id="message"
        class="message"
        style="display:none;"
    ></div>


    <div class="main-area">


        
        <div class="section">

            <h2>
                Add Product
            </h2>


            <form
                id="addProductForm"
                enctype="multipart/form-data"
            >


              

                <div class="field">

                    <label for="name">
                        Product Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter product name"
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
                        min="1"
                        step="0.01"
                        placeholder="Enter product price"
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
                        min="1"
                        placeholder="Enter quantity"
                    >

                </div>


             

                <div class="field">

                    <label for="picture">
                        Product Picture
                    </label>

                    <input
                        type="file"
                        id="picture"
                        name="picture"
                        accept=".jpg,.jpeg,.png,.gif"
                    >

                </div>



                <button
                    type="submit"
                    id="addButton"
                    class="btn"
                >
                    Add Product
                </button>


            </form>

        </div>


      
        <div class="section">

            <h2>
                Remove Product
            </h2>


    

            <input
                type="text"
                id="search"
                placeholder="Search for product"
                class="search"
            >


       

            <div
                class="product-list"
                id="productList"
            >

                <?php

                if (
                    $products &&
                    $products->num_rows > 0
                )
                {

                    while (
                        $product =
                        $products->fetch_assoc()
                    )
                    {

                ?>

                    <div
                        class="product"
                        data-name="<?php
                            echo htmlspecialchars(
                                strtolower(
                                    $product["name"]
                                )
                            );
                        ?>"
                    >

                        <div class="product-info">


                            <img
                                src="<?php
                                    echo htmlspecialchars(
                                        $product["picture"]
                                    );
                                ?>"
                                alt="Product"
                                class="product-image"
                            >


                            <div class="product-details">


                                <span class="product-name">

                                    <?php

                                    echo htmlspecialchars(
                                        $product["name"]
                                    );

                                    ?>

                                </span>


                                <span class="product-price">

                                    Price:

                                    <?php

                                    echo htmlspecialchars(
                                        $product["price"]
                                    );

                                    ?>

                                    TK

                                </span>


                                <span class="product-quantity">

                                    Quantity:

                                    <?php

                                    echo htmlspecialchars(
                                        $product["quantity"]
                                    );

                                    ?>

                                </span>


                            </div>

                        </div>


                    

                        <input
                            type="radio"
                            name="selected_product"
                            value="<?php
                                echo htmlspecialchars(
                                    $product["id"]
                                );
                            ?>"
                            class="product-checkbox"
                        >

                    </div>


                <?php

                    }

                }
                else
                {

                ?>

                    <div class="no-products">

                        No products found.

                    </div>

                <?php

                }

                ?>

            </div>



            <button
                type="button"
                id="removeButton"
                class="remove-button"
            >
                Remove Selected
            </button>


        </div>


    </div>



    <div class="back">

        <a
            href="sellerpage.php"
            class="admin-button"
        >

            &larr; Back to Seller Dashboard

        </a>

    </div>


</div>


<script src="../JS/seller_product_ajax.js"></script>


</body>

</html>

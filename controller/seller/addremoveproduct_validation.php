<?php

session_start();

include "../../model/seller/product_db.php";

if (!isset($_SESSION["seller_logged_in"]) || $_SESSION["seller_logged_in"] !== true)
{
    echo "error|You must be logged in.";
    exit();
}

$username = $_SESSION["seller_username"] ?? "";

$database = new db();
$connection = $database->connection();

$action = $_POST["action"] ?? "";

if ($action == "Add Product")
{
    $name = trim($_POST["name"] ?? "");
    $price = trim($_POST["price"] ?? "");
    $quantity = trim($_POST["quantity"] ?? "");
    $file = $_FILES["picture"] ?? [];

    $valid = true;
    $message = "";

    if (empty($name) || strlen($name) < 2)
    {
        $message = "Please enter a valid product name.";
        $valid = false;
    }

    if ($valid && (!is_numeric($price) || $price <= 0))
    {
        $message = "Please enter a valid product price.";
        $valid = false;
    }

    if ($valid && (!is_numeric($quantity) || $quantity <= 0))
    {
        $message = "Please enter a valid quantity.";
        $valid = false;
    }

    if ($valid && empty($file["name"]))
    {
        $message = "Please select a product picture.";
        $valid = false;
    }

    if ($valid)
    {
        $uploaddirectory = "../../view/assets/upload/";

        if (!is_dir($uploaddirectory))
        {
            mkdir($uploaddirectory, 0777, true);
        }

        $filename = "product_" . time() . "_" . basename($file["name"]);
        $filepath = $uploaddirectory . $filename;

        if (move_uploaded_file($file["tmp_name"], $filepath))
        {
            $path = "assets/upload/" . $filename;

            $result = $database->addProduct($connection, $name, $price, $quantity, $path, $username);

            if ($result)
            {
                echo "success|Product added successfully.";
            }
            else
            {
                echo "error|Failed to add product to database.";
            }
        }
        else
        {
            echo "error|Failed to upload product picture.";
        }
    }
    else
    {
        echo "error|" . $message;
    }

    exit();
}

if ($action == "Remove Selected")
{
    $productId = $_POST["selected_product"] ?? "";

    if (empty($productId))
    {
        echo "error|Please select a product to remove.";
        exit();
    }

    $product = $database->getSingleProduct($connection, $productId, $username);
    $result = $database->removeProduct($connection, $productId, $username);

    if ($result)
    {
        if (!empty($product["picture"]))
        {
            $imagePath = "../../view/" . $product["picture"];

            if (file_exists($imagePath))
            {
                unlink($imagePath);
            }
        }

        echo "success|Product removed successfully.";
    }
    else
    {
        echo "error|Failed to remove product.";
    }

    exit();
}

echo "error|Invalid request.";

?>
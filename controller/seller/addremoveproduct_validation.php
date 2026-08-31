<?php

session_start();

include "../../model/seller/product_db.php";


if (
    !isset($_SESSION["seller_logged_in"]) ||
    $_SESSION["seller_logged_in"] !== true
)
{
    header("Location: ../../view/selller_login.php");
    exit();
}



$username = $_SESSION["seller_username"] ?? "";



if ($_SERVER["REQUEST_METHOD"] !== "POST")
{
    header("Location: ../../view/addremoveproduct.php");
    exit();
}


$action = $_POST["action"] ?? "";



$database = new db();

$connection = $database->connection();



if ($action === "Add Product")
{


    $name = trim($_POST["name"] ?? "");
    $price = trim($_POST["price"] ?? "");
    $quantity = trim($_POST["quantity"] ?? "");



    if ($name === "")
    {
        $_SESSION["product_message"] =
            "Please enter the product name.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    if (strlen($name) < 2)
    {
        $_SESSION["product_message"] =
            "Product name must contain at least 2 characters.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    if (
        $price === "" ||
        !is_numeric($price) ||
        $price <= 0
    )
    {
        $_SESSION["product_message"] =
            "Please enter a valid product price.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }



    if (
        $quantity === "" ||
        !is_numeric($quantity) ||
        intval($quantity) <= 0 ||
        intval($quantity) != $quantity
    )
    {
        $_SESSION["product_message"] =
            "Please enter a valid quantity.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }



    $file = $_FILES["picture"] ?? [];


    if (
        !isset($file["name"]) ||
        empty($file["name"])
    )
    {
        $_SESSION["product_message"] =
            "Please select a product picture.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }

    if (
        !isset($file["error"]) ||
        $file["error"] !== UPLOAD_ERR_OK
    )
    {
        $_SESSION["product_message"] =
            "File upload error. Error code: "
            . ($file["error"] ?? "unknown");

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }



    $maxSize = 2 * 1024 * 1024;

    if ($file["size"] > $maxSize)
    {
        $_SESSION["product_message"] =
            "Picture size must be less than 2 MB.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    $allowedTypes = [
        "image/jpeg",
        "image/png",
        "image/gif"
    ];


    $imageType = mime_content_type(
        $file["tmp_name"]
    );


    if (!in_array($imageType, $allowedTypes))
    {
        $_SESSION["product_message"] =
            "Only JPG, JPEG, and GIF images are allowed.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    $controller_folder = __DIR__;

    $project_folder =
        dirname(dirname($controller_folder));

    $uploaddirectory =
        $project_folder . "/view/assets/upload/";


    if (!is_dir($uploaddirectory))
    {
        if (!mkdir(
            $uploaddirectory,
            0777,
            true
        ))
        {
            $_SESSION["product_message"] =
                "Could not create upload folder.";

            header("Location: ../../view/addremoveproduct.php");
            exit();
        }
    }


    if (!is_writable($uploaddirectory))
    {
        $_SESSION["product_message"] =
            "Upload folder is not writable.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }



    $extension =
        strtolower(
            pathinfo(
                $file["name"],
                PATHINFO_EXTENSION
            )
        );


    $filename =
        "product_" .
        uniqid() .
        "." .
        $extension;



    $filepath =
        $uploaddirectory . $filename;


    if (
        !move_uploaded_file(
            $file["tmp_name"],
            $filepath
        )
    )
    {
        $_SESSION["product_message"] =
            "Failed to upload product picture.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }



    $path =
        "assets/upload/" . $filename;


    $result = $database->addProduct(
        $connection,
        $name,
        $price,
        $quantity,
        $path,
        $username
    );

    if ($result)
    {
        $_SESSION["product_message"] =
            "Product added successfully.";
    }
    else
    {
    
        if (file_exists($filepath))
        {
            unlink($filepath);
        }

        $_SESSION["product_message"] =
            "Failed to add product to database.";
    }



    header("Location: ../../view/addremoveproduct.php");
    exit();
}


if ($action === "Remove Selected")
{

    /*
     * GET SELECTED PRODUCT
     */

    $productId =
        $_POST["selected_product"] ?? "";


    /*
     * CHECK PRODUCT SELECTION
     */

    if ($productId === "")
    {
        $_SESSION["product_message"] =
            "Please select a product to remove.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    /*
     * GET PRODUCT INFORMATION
     */

    $product =
        $database->getSingleProduct(
            $connection,
            $productId,
            $username
        );


    /*
     * PRODUCT NOT FOUND
     */

    if (!$product)
    {
        $_SESSION["product_message"] =
            "Product not found.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    /*
     * REMOVE PRODUCT FROM DATABASE
     */

    $result =
        $database->removeProduct(
            $connection,
            $productId,
            $username
        );


    /*
     * CHECK DELETE RESULT
     */

    if ($result)
    {

        /*
         * =================================================
         * DELETE PRODUCT IMAGE
         * =================================================
         */

        if (
            isset($product["picture"]) &&
            !empty($product["picture"])
        )
        {

            /*
             * Database contains:
             *
             * assets/upload/product_xxx.jpg
             *
             * We need:
             *
             * project/view/assets/upload/product_xxx.jpg
             */

            $imagePath =
                $project_folder .
                "/view/" .
                $product["picture"];


            if (file_exists($imagePath))
            {
                unlink($imagePath);
            }
        }


        $_SESSION["product_message"] =
            "Product removed successfully.";
    }
    else
    {
        $_SESSION["product_message"] =
            "Failed to remove product.";
    }


    /*
     * RETURN TO SAME PAGE
     */

    header("Location: ../../view/addremoveproduct.php");
    exit();
}


/*
 * =====================================================
 * INVALID ACTION
 * =====================================================
 */

$_SESSION["product_message"] =
    "Invalid product action.";

header("Location: ../../view/addremoveproduct.php");
exit();

?>
```

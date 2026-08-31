<?php

session_start();

include "../../model/seller/product_db.php";


/*
 * =====================================================
 * CHECK SELLER LOGIN
 * =====================================================
 */

if (
    !isset($_SESSION["seller_logged_in"]) ||
    $_SESSION["seller_logged_in"] !== true
)
{
    header("Location: ../../view/selller_login.php");
    exit();
}


/*
 * =====================================================
 * GET SELLER USERNAME
 * =====================================================
 */

$username = $_SESSION["seller_username"] ?? "";


/*
 * =====================================================
 * CHECK REQUEST METHOD
 * =====================================================
 */

if ($_SERVER["REQUEST_METHOD"] !== "POST")
{
    header("Location: ../../view/addremoveproduct.php");
    exit();
}


/*
 * =====================================================
 * GET ACTION
 * =====================================================
 */

$action = $_POST["action"] ?? "";


/*
 * =====================================================
 * DATABASE CONNECTION
 * =====================================================
 */

$database = new db();

$connection = $database->connection();


/*
 * =====================================================
 * ADD PRODUCT
 * =====================================================
 */

if ($action === "Add Product")
{

    /*
     * GET FORM DATA
     */

    $name = trim($_POST["name"] ?? "");
    $price = trim($_POST["price"] ?? "");
    $quantity = trim($_POST["quantity"] ?? "");


    /*
     * =================================================
     * PRODUCT NAME VALIDATION
     * =================================================
     */

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


    /*
     * =================================================
     * PRICE VALIDATION
     * =================================================
     */

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


    /*
     * =================================================
     * QUANTITY VALIDATION
     * =================================================
     */

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


    /*
     * =================================================
     * GET PICTURE
     * =================================================
     */

    $file = $_FILES["picture"] ?? [];


    /*
     * CHECK PICTURE EXISTS
     */

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


    /*
     * =================================================
     * CHECK UPLOAD ERROR
     * =================================================
     */

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


    /*
     * =================================================
     * MAXIMUM FILE SIZE
     *
     * 2 MB
     * =================================================
     */

    $maxSize = 2 * 1024 * 1024;

    if ($file["size"] > $maxSize)
    {
        $_SESSION["product_message"] =
            "Picture size must be less than 2 MB.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    /*
     * =================================================
     * CHECK IMAGE TYPE
     * =================================================
     */

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


    /*
     * =================================================
     * UPLOAD DIRECTORY
     *
     * Current file:
     *
     * controller/seller/
     *
     * Go to project root:
     *
     * WebTech_Summer25-26_Group_8/
     *
     * Then:
     *
     * view/assets/upload/
     * =================================================
     */

    $controller_folder = __DIR__;

    $project_folder =
        dirname(dirname($controller_folder));

    $uploaddirectory =
        $project_folder . "/view/assets/upload/";


    /*
     * =================================================
     * CREATE FOLDER IF IT DOES NOT EXIST
     * =================================================
     */

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


    /*
     * =================================================
     * CHECK FOLDER WRITABLE
     * =================================================
     */

    if (!is_writable($uploaddirectory))
    {
        $_SESSION["product_message"] =
            "Upload folder is not writable.";

        header("Location: ../../view/addremoveproduct.php");
        exit();
    }


    /*
     * =================================================
     * GET ORIGINAL EXTENSION
     * =================================================
     */

    $extension =
        strtolower(
            pathinfo(
                $file["name"],
                PATHINFO_EXTENSION
            )
        );


    /*
     * =================================================
     * CREATE UNIQUE FILE NAME
     * =================================================
     *
     * This prevents two products having
     * the same image name.
     */

    $filename =
        "product_" .
        uniqid() .
        "." .
        $extension;


    /*
     * =================================================
     * COMPLETE FILE PATH
     * =================================================
     */

    $filepath =
        $uploaddirectory . $filename;


    /*
     * =================================================
     * MOVE IMAGE TO:
     *
     * view/assets/upload/
     * =================================================
     */

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


    /*
     * =================================================
     * PATH TO STORE IN DATABASE
     * =================================================
     *
     * NOT the complete Linux path.
     *
     * Example:
     *
     * assets/upload/product_123456.jpg
     * =================================================
     */

    $path =
        "assets/upload/" . $filename;


    /*
     * =================================================
     * INSERT PRODUCT INTO DATABASE
     * =================================================
     */

    $result = $database->addProduct(
        $connection,
        $name,
        $price,
        $quantity,
        $path,
        $username
    );


    /*
     * =================================================
     * CHECK DATABASE RESULT
     * =================================================
     */

    if ($result)
    {
        $_SESSION["product_message"] =
            "Product added successfully.";
    }
    else
    {
        /*
         * Database insertion failed.
         *
         * Delete uploaded image because
         * product was not saved.
         */

        if (file_exists($filepath))
        {
            unlink($filepath);
        }

        $_SESSION["product_message"] =
            "Failed to add product to database.";
    }


    /*
     * =================================================
     * GO BACK TO ADD/REMOVE PRODUCT PAGE
     *
     * NO REDIRECTION TO ANOTHER PAGE
     * =================================================
     */

    header("Location: ../../view/addremoveproduct.php");
    exit();
}


/*
 * =====================================================
 * REMOVE PRODUCT
 * =====================================================
 */

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

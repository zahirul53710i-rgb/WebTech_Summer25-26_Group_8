```php
<?php

session_start();

// Model will be included here later
// require_once __DIR__ . "/../Model/productModel.php";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $action = $_POST["action"] ?? "";


    /* =====================================
       ADD PRODUCT
       ===================================== */

    if ($action == "Add Product")
    {

        $name = trim($_POST["name"] ?? "");
        $price = trim($_POST["price"] ?? "");
        $quantity = trim($_POST["quantity"] ?? "");


        $valid = true;
        $message = "";


        /* PRODUCT NAME */

        if (empty($name))
        {
            $valid = false;
            $message = "Product name is required.";
        }

        elseif (strlen($name) < 2)
        {
            $valid = false;
            $message = "Product name must contain at least 2 characters.";
        }


        /* PRICE */

        elseif (empty($price))
        {
            $valid = false;
            $message = "Price is required.";
        }

        elseif (!is_numeric($price))
        {
            $valid = false;
            $message = "Price must be a valid number.";
        }

        elseif ($price <= 0)
        {
            $valid = false;
            $message = "Price must be greater than 0.";
        }


        /* QUANTITY */

        elseif (empty($quantity))
        {
            $valid = false;
            $message = "Quantity is required.";
        }

        elseif (!ctype_digit($quantity))
        {
            $valid = false;
            $message = "Quantity must be a positive whole number.";
        }

        elseif ((int)$quantity <= 0)
        {
            $valid = false;
            $message = "Quantity must be greater than 0.";
        }


        /* PICTURE */

        elseif (
            !isset($_FILES["picture"]) ||
            $_FILES["picture"]["error"] == UPLOAD_ERR_NO_FILE
        )
        {
            $valid = false;
            $message = "Please select a product picture.";
        }

        elseif ($_FILES["picture"]["error"] != UPLOAD_ERR_OK)
        {
            $valid = false;
            $message = "There was a problem uploading the picture.";
        }


        /* PICTURE CHECK */

        if ($valid)
        {

            $picture = $_FILES["picture"];


            // Maximum size = 2 MB

            if ($picture["size"] > 2 * 1024 * 1024)
            {
                $valid = false;
                $message = "Picture size must be less than 2 MB.";
            }


            // Check actual image

            elseif (getimagesize($picture["tmp_name"]) === false)
            {
                $valid = false;
                $message = "The selected file is not a valid image.";
            }


            // Check extension

            else
            {

                $allowedExtensions = [
                    "jpg",
                    "jpeg",
                    "png",
                    "gif"
                ];


                $extension = strtolower(
                    pathinfo(
                        $picture["name"],
                        PATHINFO_EXTENSION
                    )
                );


                if (!in_array($extension, $allowedExtensions))
                {
                    $valid = false;
                    $message =
                        "Only JPG, JPEG, PNG and GIF images are allowed.";
                }

            }

        }


        /* =====================================
           IF VALID
           ===================================== */

        if ($valid)
        {

            /*
             * Later, call your Model here.
             *
             * Example:
             *
             * $productId = addProduct(
             *     $name,
             *     $price,
             *     $quantity,
             *     $picture
             * );
             */


            /*
             * TEMPORARY SESSION STORAGE
             *
             * This is only for testing until
             * your database Model is connected.
             */

            $product = [
                "name" => $name,
                "price" => $price,
                "quantity" => $quantity
            ];


            if (!isset($_SESSION["products"]))
            {
                $_SESSION["products"] = [];
            }


            $_SESSION["products"][] = $product;


            /*
             * Store success notification
             */

            $_SESSION["product_message"] =
                "Product added successfully!";


            /*
             * Go to My Products page
             */

            header("Location: ../View/myproduct.php");
            exit();

        }


        /* =====================================
           IF INVALID
           ===================================== */

        else
        {

            echo "<script>
                    alert(" . json_encode($message) . ");
                    window.history.back();
                  </script>";

            exit();

        }

    }


    /* =====================================
       REMOVE PRODUCT
       ===================================== */

    elseif ($action == "Remove Selected")
    {

        $selectedProduct =
            $_POST["selected_product"] ?? "";


        if (empty($selectedProduct))
        {

            echo "<script>
                    alert('Please select a product to remove.');
                    window.history.back();
                  </script>";

            exit();

        }


        /*
         * Later:
         *
         * deleteProduct($selectedProduct);
         */


        echo "<script>
                alert('Product removed successfully.');
                window.location.href = '../View/myproduct.php';
              </script>";

        exit();

    }


    /* =====================================
       INVALID ACTION
       ===================================== */

    else
    {

        echo "<script>
                alert('Invalid request.');
                window.history.back();
              </script>";

        exit();

    }

}

else
{

    echo "<script>
            alert('Invalid request method.');
            window.history.back();
          </script>";

    exit();

}

?>
```

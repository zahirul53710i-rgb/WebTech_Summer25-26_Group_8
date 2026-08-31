<?php
session_start();

$quantity = "";
$message = "";
$product_name = "Organic Green Tea";
$price = 250;
$total = 0;


if (isset($_COOKIE["cart_quantity"])) {
    $quantity = $_COOKIE["cart_quantity"];
    $total = (int)$quantity * $price;
}

$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = trim($_POST["quantity"] ?? "");

    if (empty($quantity)) {
        $message = "Quantity is Required";
        $valid = false;
    } else if (!is_numeric($quantity)) {
        $message = "Quantity Must be a Number";
        $valid = false;
    } else if ((int)$quantity <= 0) {
        $message = "Quantity Must be Greater Than 0";
        $valid = false;
    }

    if ($valid) {
        $total = (int)$quantity * $price;

     
        $_SESSION["cart_product"] = $product_name;
        $_SESSION["cart_quantity"] = $quantity;
        $_SESSION["cart_total"] = $total;

        
        setcookie("cart_quantity", $quantity, time() + (86400 * 30), "/");

        $message = "Order Placed Successfully! Total: BDT " . $total;
    }
}
?>
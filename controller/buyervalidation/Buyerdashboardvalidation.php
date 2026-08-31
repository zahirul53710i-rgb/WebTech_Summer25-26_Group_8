<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$product = "";
$quantity = "";
$message = "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = trim($_POST["product"] ?? "");
    $quantity = trim($_POST["quantity"] ?? "");

    if (empty($product)) {
        $message = "Product is Required";
        $valid = false;
    }

    if (empty($quantity)) {
        $message = "Quantity is Required";
        $valid = false;
    } else if (!is_numeric($quantity)) {
        $message = "Quantity Must be a Number";
        $valid = false;
    } else if ($quantity <= 0) {
        $message = "Quantity Must be Greater Than 0";
        $valid = false;
    }

    if ($valid) {
        $message = "Product Added to Cart";
        
      
        $_SESSION['cart'][] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }
}
?>
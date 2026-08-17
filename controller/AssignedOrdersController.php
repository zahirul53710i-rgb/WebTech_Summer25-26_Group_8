<?php
session_start();
 
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: ../View/login.php");
    exit();
}
 
$assignedOrdersFile = "../Model/assigned_orders.json";
$orders = [];
if (file_exists($assignedOrdersFile)) {
    $orders = json_decode(file_get_contents($assignedOrdersFile), true) ?? [];
}
?>
 
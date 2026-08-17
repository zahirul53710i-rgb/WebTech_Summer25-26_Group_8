<?php
session_start();
 
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: ../View/login.php");
    exit();
}
 
$deliveryLogFile = "../Model/delivery_log.json";
$logs = [];
if (file_exists($deliveryLogFile)) {
    $logs = json_decode(file_get_contents($deliveryLogFile), true) ?? [];
}
?>
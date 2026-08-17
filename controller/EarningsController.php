<?php
session_start();
 
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: ../View/login.php");
    exit();
}
 
$earningsFile = "../Model/earnings.json";
$earningsData = ["total_earnings" => 0, "history" => []];
if (file_exists($earningsFile)) {
    $earningsData = json_decode(file_get_contents($earningsFile), true) ?? $earningsData;
}
?>
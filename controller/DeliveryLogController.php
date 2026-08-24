<?php
session_start();
include "../Model/db.php";

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: ../View/login.php");
    exit();
}

$logs = [];
$sql = "SELECT order_id, customer_name, delivery_date, status FROM deliveries";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $logs[] = $row;
    }
}
?>
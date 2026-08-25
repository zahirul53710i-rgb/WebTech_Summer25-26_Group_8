<?php
session_start();
include "../Model/db.php";
 

if (!isset($_SESSION["username"])) {
    header("Location: ../View/login.php");
    exit();
}
 

$database = new db();
$conn = $database->connection();
 
$logs = [];
$sql = "SELECT order_id, customer_name, delivery_date, status FROM deliveries";
$result = $conn->query($sql);
 
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $logs[] = $row;
    }
}
 

$conn->close();
?>
 
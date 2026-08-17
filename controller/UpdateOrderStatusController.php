
<?php
session_start();
 
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: ../View/login.php");
    exit();
}
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $order_id = $_POST["order_id"] ?? "";
    $new_status = $_POST["status"] ?? "";
 
    if (!empty($order_id) && !empty($new_status)) {
        $assignedFile = "../Model/assigned_orders.json";
 
        if (file_exists($assignedFile)) {
            $orders = json_decode(file_get_contents($assignedFile), true) ?? [];
            
            foreach ($orders as &$order) {
                if ($order["order_id"] == $order_id) {
                    $order["status"] = $new_status;
                    break;
                }
            }
 
            file_put_contents($assignedFile, json_encode($orders, JSON_PRETTY_PRINT));
        }
    }
}
 
header("Location: ../View/assigned_orders.php");
exit();
?>
 
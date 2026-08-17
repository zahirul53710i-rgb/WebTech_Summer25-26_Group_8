<?php
session_start();
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION["username"] ?? "Delivery Person";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigned Orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="wrap">
      
        <div class="admin-header">
            <h1>Assigned Orders</h1>
            <p>Manage and track orders assigned to you</p>
        </div>
 
      
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td>#ORD-101</td>
                    <td>John Doe</td>
                    <td>Dhaka, Bangladesh</td>
                    <td>Pending</td>
                    <td>
                        <a href="#" class="admin-button">Update Status</a>
                    </td>
                </tr>
                <tr>
                    <td>#ORD-102</td>
                    <td>Jane Smith</td>
                    <td>Uttara, Dhaka</td>
                    <td>In Transit</td>
                    <td>
                        <a href="#" class="admin-button gold">Complete</a>
                    </td>
                </tr>
            </tbody>
        </table>
 
        <br>
 
       
        <div>
            <a href="delivery_dashboard.php" class="back-link">
                &larr; Back to Dashboard
            </a>
        </div>
    </div>
 
</body>
</html>
 

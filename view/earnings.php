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
    <title>Earnings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="wrap">
        
        <div class="admin-header">
            <h1>Earnings Overview</h1>
            <p>Track your total earnings and payment history</p>
        </div>
 
        
        <div class="stats">
            <div class="stat-box">
                <h2>tk 5,200</h2>
                <p>Total Earnings</p>
            </div>
            <div class="stat-box">
                <h2>26</h2>
                <p>Completed Deliveries</p>
            </div>
        </div>
 
       
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Order ID</th>
                    <th>Delivery Fee</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>18 Aug 2026</td>
                    <td>#ORD-101</td>
                    <td>tk 200</td>
                    <td>Paid</td>
                </tr>
                <tr>
                    <td>17 Aug 2026</td>
                    <td>#ORD-098</td>
                    <td>tk 150</td>
                    <td>Paid</td>
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
 

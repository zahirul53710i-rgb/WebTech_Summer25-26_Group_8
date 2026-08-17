
<?php
include "../Controller/DeliveryLogController.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
 
    <title>Delivery Log</title>
</head>
<body>
    <div class="wrap">
        <div class="admin-header">
            <h1>Delivery Log</h1>
            <p>Your complete delivery history</p>
        </div>
 
       
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1024</td>
                    <td>Delivered</td>
                    <td>500 BDT</td>
                </tr>
            </tbody>
        </table>
 
        <br>
        <a href="delivery_dashboard.php" class="back-link">&larr; Back to Dashboard</a>
    </div>
</body>
 
 

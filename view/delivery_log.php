
<?php
include "../Controller/DeliveryLogController.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delivery Log</title>
</head>
<body>
 
    <h2>Delivery Log</h2>
    <a href="delivery_dashboard.php">Back to Dashboard</a>
    <br><br>
 
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Delivery Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($logs)): ?>
                <?php foreach ($logs as $log): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($log['order_id']); ?></td>
                        <td><?php echo htmlspecialchars($log['customer_name']); ?></td>
                        <td><?php echo htmlspecialchars($log['delivery_date']); ?></td>
                        <td><?php echo htmlspecialchars($log['status']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No delivery logs found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
 
</body>
</html>
 
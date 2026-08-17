
<?php
include "../Controller/AssignedOrdersController.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Assigned Orders</title>
</head>
<body>
 
    <h2>Assigned Orders</h2>
    <a href="delivery_dashboard.php">Back to Dashboard</a>
    <br><br>
 
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($order['order_id']); ?></td>
                        <td><?php echo htmlspecialchars($order['customer_name']); ?></td>
                        <td><?php echo htmlspecialchars($order['address']); ?></td>
                        <td><?php echo htmlspecialchars($order['status']); ?></td>
                        <td>
                            <form method="post" action="../Controller/UpdateOrderStatusController.php">
                                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($order['order_id']); ?>">
                                <select name="status">
                                    <option value="Pending" <?php echo $order['status'] === 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                    <option value="In Transit" <?php echo $order['status'] === 'In Transit' ? 'selected' : ''; ?>>In Transit</option>
                                    <option value="Delivered" <?php echo $order['status'] === 'Delivered' ? 'selected' : ''; ?>>Delivered</option>
                                </select>
                                <input type="submit" value="Update">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">No assigned orders found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
 
</body>
</html>
 

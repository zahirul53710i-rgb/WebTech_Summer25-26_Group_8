
<?php
include "../Controller/EarningsController.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Earnings</title>
</head>
<body>
 
    <h2>Earnings Overview</h2>
    <a href="delivery_dashboard.php">Back to Dashboard</a>
    <br><br>
 
    <h3>Total Earnings: $<?php echo htmlspecialchars($earningsData['total_earnings']); ?></h3>
 
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($earningsData['history'])): ?>
                <?php foreach ($earningsData['history'] as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['order_id']); ?></td>
                        <td>$<?php echo htmlspecialchars($item['amount']); ?></td>
                        <td><?php echo htmlspecialchars($item['date']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="3">No earnings recorded yet.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
 
</body>
</html>
 
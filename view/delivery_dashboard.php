
<?php
session_start();
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION["username"] ?? "Delivery Person";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delivery Dashboard</title>
</head>
<body>
 
    <h2>Welcome, <?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?> (Delivery Panel)</h2>
    
    <ul>
        <li><a href="assigned_orders.php">Assigned Orders</a></li>
        <li><a href="delivery_log.php">Delivery Log</a></li>
        <li><a href="earnings.php">Earnings</a></li>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="../Controller/logout.php">Logout</a></li>
    </ul>
 
</body>
</html>
 
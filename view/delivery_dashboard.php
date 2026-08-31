
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
    <link rel="stylesheet" href="style.css">
    <title>Delivery Dashboard</title>
</head>
<body>
 
   <div class="panel">
        <h1>Welcome, <?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?></h1>
        <p class="sub">Delivery Panel</p>
        
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <a href="assigned_orders.php" class="btn">Assigned Orders</a>
            <a href="delivery_log.php" class="btn">Delivery Log</a>
            <a href="earnings.php" class="btn">Earnings</a>
            <a href="change_password.php" class="btn admin-button gold">Change Password</a>
            <a href="../Controller/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
 
</body>
</html>
 

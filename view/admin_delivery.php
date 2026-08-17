<?php

$pageTitle = "Delivery Management";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="wrap">

    <div class="admin-header">

        <h1>Delivery Management</h1>

        <p>
            Manage approved orders and delivery information.
        </p>

    </div>


    <br>

    <a href="#" class="admin-button">
        + Add Delivery
    </a>


    <table class="admin-table">

        <tr>
            <th>Delivery ID</th>
            <th>Buyer</th>
            <th>Product</th>
            <th>Address</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>D-001</td>
            <td>Rahim</td>
            <td>Antique Vase</td>
            <td>Dhaka</td>
            <td>Processing</td>
            <td>
                <a href="#" class="admin-button">
                    Update
                </a>
            </td>
        </tr>

        <tr>
            <td>D-002</td>
            <td>Nabila</td>
            <td>Old Coin</td>
            <td>Chittagong</td>
            <td>Delivered</td>
            <td>
                <a href="#" class="admin-button">
                    Delete
                </a>
            </td>
        </tr>

    </table>


    <br>

    <a href="admin_dashboard.php" class="back-link">
        &larr; Back to Dashboard
    </a>

</div>


</body>

</html>
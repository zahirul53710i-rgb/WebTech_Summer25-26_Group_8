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

<table>

```
<tr>
    <td colspan="6">

        <h1>Delivery Management</h1>

        <p>
            Manage approved orders and delivery information.
        </p>

    </td>
</tr>

<tr>
    <td colspan="6">
        <a href="#">
            + Add Delivery
        </a>
    </td>
</tr>

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
        <a href="#">
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
        <a href="#">
            Delete
        </a>
    </td>
</tr>

<tr>
    <td colspan="6">
        <a href="admin_dashboard.php">
            &larr; Back to Dashboard
        </a>
    </td>
</tr>

</table>

</body>

</html>

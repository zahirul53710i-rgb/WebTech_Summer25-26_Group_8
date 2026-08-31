<?php

$pageTitle = "Buying Requests";

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
<tr>
    <td colspan="5">

        <h1>Buying Requests</h1>

        <p>
            Review requests submitted by buyers.
        </p>

    </td>
</tr>

<tr>
    <td colspan="5">
        <a href="#">
            + Add Request
        </a>
    </td>
</tr>

<tr>
    <th>Request ID</th>
    <th>Buyer</th>
    <th>Product</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<tr>
    <td>BR-001</td>
    <td>Rahim</td>
    <td>Antique Vase</td>
    <td>Pending</td>
    <td>
        <a href="#">
            Approve
        </a>
    </td>
</tr>

<tr>
    <td>BR-002</td>
    <td>Nabila</td>
    <td>Old Coin Collection</td>
    <td>Approved</td>
    <td>
        <a href="#">
            Delete
        </a>
    </td>
</tr>

<tr>
    <td colspan="5">
        <a href="admin_dashboard.php">
            &larr; Back to Dashboard
        </a>
    </td>
</tr>
</table>

</body>

</html>

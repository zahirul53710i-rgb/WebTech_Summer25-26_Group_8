<?php

$pageTitle = "Manage Listings";

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

        <h1>Manage Listings</h1>

        <p>
            Review products submitted by sellers.
        </p>

    </td>
</tr>

<tr>
    <td colspan="5">
        <a href="#">
            + Add Listing
        </a>
    </td>
</tr>

<tr>
    <th>Product</th>
    <th>Seller</th>
    <th>Price</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<tr>
    <td>Antique Vase</td>
    <td>Rahim</td>
    <td>৳ 12,000</td>
    <td>Pending</td>
    <td>
        <a href="#">
            Approve
        </a>
    </td>
</tr>

<tr>
    <td>Old Coin Collection</td>
    <td>Karim</td>
    <td>৳ 8,500</td>
    <td>Approved</td>
    <td>
        <a href="#">
            Delete
        </a>
    </td>
</tr>

<tr>
    <td>Vintage Showpiece</td>
    <td>Nabila</td>
    <td>৳ 5,000</td>
    <td>Pending</td>
    <td>
        <a href="#">
            Approve
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

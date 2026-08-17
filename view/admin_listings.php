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


<div class="wrap">

    <div class="admin-header">

        <h1>Manage Listings</h1>

        <p>
            Review products submitted by sellers.
        </p>

    </div>


    <br>

    <a href="#" class="admin-button">
        + Add Listing
    </a>


    <table class="admin-table">

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
                <a href="#" class="admin-button">
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
                <a href="#" class="admin-button">
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
                <a href="#" class="admin-button">
                    Approve
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
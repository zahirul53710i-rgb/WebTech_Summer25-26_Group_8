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


<div class="wrap">

    <div class="admin-header">

        <h1>Buying Requests</h1>

        <p>
            Review requests submitted by buyers.
        </p>

    </div>


    <br>

    <a href="#" class="admin-button">
        + Add Request
    </a>


    <table class="admin-table">

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
                <a href="#" class="admin-button">
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
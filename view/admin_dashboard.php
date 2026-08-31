<?php

$pageTitle = "Admin Dashboard";

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
    <td colspan="2">
        <h1>Admin Dashboard</h1>

        <p>
            Manage users, products and buying requests
            from one place.
        </p>
    </td>
</tr>

<tr>
    <th>Function</th>
    <th>Action</th>
</tr>

<tr>
    <td>
        <b>Manage Users</b>
        <br>
        View registered buyers and sellers
        and manage their accounts.
    </td>

    <td>
        <a href="admin_users.php">
            Manage Users
        </a>
    </td>
</tr>

<tr>
    <td>
        <b>Approve Listings</b>
        <br>
        Check products submitted by sellers
        before they become visible to buyers.
    </td>

    <td>
        <a href="admin_listings.php">
            Review Listings
        </a>
    </td>
</tr>

<tr>
    <td>
        <b>Buying Requests</b>
        <br>
        Review and manage purchase requests
        submitted by buyers.
    </td>

    <td>
        <a href="admin_requests.php">
            View Requests
        </a>
    </td>
</tr>

<tr>
    <td>
        <b>Delivery Management</b>
        <br>
        Monitor approved orders and
        delivery information.
    </td>

    <td>
        <a href="admin_delivery.php">
            Manage Delivery
        </a>
    </td>
</tr>

<tr>
    <td colspan="2">

        <a href="dashboard.php">
            &larr; Logout
        </a>

        &nbsp;&nbsp;

        <a href="admin_change_password.php">
            Change Password
        </a>

    </td>
</tr>
</table>

</body>

</html>

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


    <div class="wrap">

        <div class="admin-header">

            <h1>Admin Dashboard</h1>

            <p>
                Manage users, products and buying requests
                from one place.
            </p>

        </div>


        <!-- Admin Functions -->

        <div class="admin-grid">

            <div class="admin-card">

                <h2>Manage Users</h2>

                <p>
                    View registered buyers and sellers
                    and manage their accounts.
                </p>

                <a href="admin_users.php" class="admin-button">
                    Manage Users
                </a>

            </div>


            <div class="admin-card">

                <h2>Approve Listings</h2>

                <p>
                    Check products submitted by sellers
                    before they become visible to buyers.
                </p>

                <a href="admin_listings.php" class="admin-button gold">
                    Review Listings
                </a>

            </div>


            <div class="admin-card">

                <h2>Buying Requests</h2>

                <p>
                    Review and manage purchase requests
                    submitted by buyers.
                </p>

                <a href="admin_requests.php" class="admin-button">
                    View Requests
                </a>

            </div>


            <div class="admin-card">

                <h2>Delivery Management</h2>

                <p>
                    Monitor approved orders and
                    delivery information.
                </p>

                <a href="admin_delivery.php" class="admin-button gold">
                    Manage Delivery
                </a>

            </div>

        </div>


        <br>

        <a href="dashboard.php" class="admin-button">
            &larr; Logout
        </a>
        <a href="admin_change_password.php" class="admin-button gold">
            Change Password
        </a>

    </div>
</body>
</html>
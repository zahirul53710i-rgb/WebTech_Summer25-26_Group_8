<?php

$pageTitle = "Manage Users";

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

        <h1>Manage Users</h1>

        <p>
            View and manage registered buyers and sellers.
        </p>

    </div>


    <br>

    <a href="#" class="admin-button">
        + Add User
    </a>


    <table class="admin-table">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>01</td>
            <td>Rahim</td>
            <td>rahim@example.com</td>
            <td>Buyer</td>
            <td>
                <a href="#" class="admin-button">Delete</a>
            </td>
        </tr>

        <tr>
            <td>02</td>
            <td>Karim</td>
            <td>karim@example.com</td>
            <td>Seller</td>
            <td>
                <a href="#" class="admin-button">Delete</a>
            </td>
        </tr>

        <tr>
            <td>03</td>
            <td>Nabila</td>
            <td>nabila@example.com</td>
            <td>Buyer</td>
            <td>
                <a href="#" class="admin-button">Delete</a>
            </td>
        </tr>

    </table>


    <br>

    <a href="admin_dashboard.php" class="back-link">
        &larr; Back to Dashboard
    </a>

</div>


<?php include __DIR__ . '/View/partials/footer.php'; ?>

</body>

</html>
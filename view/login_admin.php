<?php

$pageTitle = "Admin Login";

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

    <div class="panel">

        <a href="dashboard.php" class="back-link">
            &larr; Back to HaatBodol
        </a>

        <h1>Admin Login</h1>

        <p class="sub">
            Login to manage the HaatBodol marketplace.
        </p>


        <form method="post" action="admin_dashboard.php">

            <div class="field">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter username"
                    required
                >

            </div>


            <div class="field">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter password"
                    required
                >

            </div>


            <button type="submit" class="btn">
                Login
            </button>

        </form>


        <p class="form-foot">
            Default username: <b>admin</b><br>
            Default password: <b>admin</b>
        </p>

    </div>

</div>


</body>

</html>
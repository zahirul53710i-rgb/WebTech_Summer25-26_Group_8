<?php

$pageTitle = "Change Admin Password";

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

        <a href="admin_dashboard.php" class="back-link">
            &larr; Back to Dashboard
        </a>

        <h1>Change Password</h1>

        <p class="sub">
            Change the password used for admin login.
        </p>


        <form>

            <div class="field">

                <label>
                    Current Password
                </label>

                <input
                    type="password"
                    placeholder="Enter current password"
                >

            </div>


            <div class="field">

                <label>
                    New Password
                </label>

                <input
                    type="password"
                    placeholder="Enter new password"
                >

            </div>


            <div class="field">

                <label>
                    Confirm Password
                </label>

                <input
                    type="password"
                    placeholder="Confirm new password"
                >

            </div>


            <button type="button"
                    class="btn"
                    onclick="alert('Password change will be connected to the database later.')">

                Change Password

            </button>

        </form>

    </div>

</div>


</body>

</html>
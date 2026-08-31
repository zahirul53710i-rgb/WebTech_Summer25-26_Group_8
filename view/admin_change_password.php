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

<form method="post" action="../controller/Admin/AdminChangePasswordValidation.php">

<table>
<tr>
    <td colspan="2">
        <a href="admin_dashboard.php">
            &larr; Back to Dashboard
        </a>
    </td>
</tr>

<tr>
    <td colspan="2">
        <h1>Change Password</h1>
    </td>
</tr>

<tr>
    <td colspan="2">
        <p>
            Change the password used for admin login.
        </p>
    </td>
</tr>

<tr>
    <td>
        <label for="currentPassword">
            Current Password
        </label>
    </td>

    <td>
        <input
            type="password"
            id="currentPassword"
            name="currentPassword"
            placeholder="Enter current password"
            required
        >
    </td>
</tr>

<tr>
    <td>
        <label for="newPassword">
            New Password
        </label>
    </td>

    <td>
        <input
            type="password"
            id="newPassword"
            name="newPassword"
            placeholder="Enter new password"
            required
        >
    </td>
</tr>

<tr>
    <td>
        <label for="confirmPassword">
            Confirm Password
        </label>
    </td>

    <td>
        <input
            type="password"
            id="confirmPassword"
            name="confirmPassword"
            placeholder="Confirm new password"
            required
        >
    </td>
</tr>

<tr>
    <td colspan="2">
        <input type="submit" value="Change Password">
    </td>
</tr>

</table>

</form>

</body>

</html>

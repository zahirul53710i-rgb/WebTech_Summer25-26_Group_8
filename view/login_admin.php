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
```

</head>

<body>

<form method="post" action="../controller/Admin/AdminLoginValidation.php">

<table>

    <tr>
        <td colspan="2">
            <a href="dashboard.php">
                &larr; Back to HaatBodol
            </a>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <h1>Admin Login</h1>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <p>
                Login to manage the HaatBodol marketplace.
            </p>
        </td>
    </tr>

    <tr>
        <td>
            <label for="username">
                Username
            </label>
        </td>

        <td>
            <input
                type="text"
                id="username"
                name="username"
                placeholder="Enter username"
                required
            >
        </td>
    </tr>

    <tr>
        <td>
            <label for="password">
                Password
            </label>
        </td>

        <td>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter password"
                required
            >
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="submit" value="Login">
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <p>
                Default username: <b>admin</b><br>
                Default password: <b>admin</b>
            </p>
        </td>
    </tr>

</table>

</form>

</body>

</html>

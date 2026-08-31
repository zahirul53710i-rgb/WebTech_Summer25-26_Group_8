<?php

$pageTitle = "Admin Dashboard";

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle; ?></title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f5f1e8;
  color: #26332d;
  line-height: 1.6;
}

/* Links */
a {
  color: #527464;
  text-decoration: none;
  font-weight: bold;
}

a:hover {
  color: #9a742e;
}

/* =========================
TABLE PAGES
========================= */

body > table {
  width: 90%;
  max-width: 1100px;
  margin: 60px auto;
  border-collapse: collapse;
  background-color: #fffdf8;
  border: 1px solid #ddd5c5;
}

/* Page Heading */
body > table tr:first-child td {
  padding: 30px;
  border-bottom: 1px solid #ddd5c5;
}

h1 {
  font-family: Georgia, serif;
  color: #263f35;
  font-size: 32px;
  font-weight: normal;
  margin-bottom: 5px;
}

p {
  color: #62665e;
}

/* Add / Navigation Links */
body > table tr:nth-child(2) td {
  padding: 18px 30px;
  border-bottom: 1px solid #ddd5c5;
}

/* Table Heading */
body > table th {
  background-color: #263f35;
  color: white;
  padding: 13px 15px;
  text-align: left;
  font-weight: bold;
}

/* Table Data */
body > table td {
  padding: 13px 15px;
  border-bottom: 1px solid #ddd5c5;
  vertical-align: middle;
}

/* Table Row */
body > table tr:hover {
  background-color: #f5f1e8;
}

/* Action Column */
body > table td:last-child {
  text-align: center;
}

/* =========================
LOGIN / PASSWORD FORM
========================= */

form {
  width: 90%;
  max-width: 500px;
  margin: 80px auto;
  padding: 30px;
  background-color: #fffdf8;
  border: 1px solid #ddd5c5;
}

/* Form Table */
form table {
  width: 100%;
  border-collapse: collapse;
  margin: 0;
  background-color: transparent;
  border: none;
}

/* Form Cells */
form table td {
  padding: 10px;
  border: none;
}

/* Remove hover from form */
form table tr:hover {
  background-color: transparent;
}

/* Form Heading */
form h1 {
  margin-bottom: 5px;
}

/* Form Paragraph */
form p {
  margin-bottom: 5px;
}

/* Labels */
label {
  font-weight: bold;
  color: #263f35;
}

/* Text Input */
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd5c5;
  background-color: #f5f1e8;
  color: #26332d;
  font-size: 14px;
}

/* Input Focus */
input[type="text"]:focus,
input[type="password"]:focus {
  outline: none;
  border-color: #527464;
}

/* Submit Button */
input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #527464;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 14px;
  font-weight: bold;
}

input[type="submit"]:hover {
  background-color: #3d5b4d;
}
</style>

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
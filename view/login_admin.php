<?php

$pageTitle = "Admin Login";

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


a {
  color: #527464;
  text-decoration: none;
  font-weight: bold;
}

a:hover {
  color: #9a742e;
}



body > table {
  width: 90%;
  max-width: 1100px;
  margin: 60px auto;
  border-collapse: collapse;
  background-color: #fffdf8;
  border: 1px solid #ddd5c5;
}


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


body > table tr:nth-child(2) td {
  padding: 18px 30px;
  border-bottom: 1px solid #ddd5c5;
}


body > table th {
  background-color: #263f35;
  color: white;
  padding: 13px 15px;
  text-align: left;
  font-weight: bold;
}


body > table td {
  padding: 13px 15px;
  border-bottom: 1px solid #ddd5c5;
  vertical-align: middle;
}


body > table tr:hover {
  background-color: #f5f1e8;
}


body > table td:last-child {
  text-align: center;
}



form {
  width: 90%;
  max-width: 500px;
  margin: 80px auto;
  padding: 30px;
  background-color: #fffdf8;
  border: 1px solid #ddd5c5;
}


form table {
  width: 100%;
  border-collapse: collapse;
  margin: 0;
  background-color: transparent;
  border: none;
}


form table td {
  padding: 10px;
  border: none;
}


form table tr:hover {
  background-color: transparent;
}


form h1 {
  margin-bottom: 5px;
}


form p {
  margin-bottom: 5px;
}


label {
  font-weight: bold;
  color: #263f35;
}


input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd5c5;
  background-color: #f5f1e8;
  color: #26332d;
  font-size: 14px;
}


input[type="text"]:focus,
input[type="password"]:focus {
  outline: none;
  border-color: #527464;
}


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
        <p>Login to manage the HaatBodol marketplace.</p>
    </td>
</tr>

<tr>
    <td>
        <label for="username">Username</label>
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
        <label for="password">Password</label>
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
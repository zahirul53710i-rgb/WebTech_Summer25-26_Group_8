<?php

include("../../model/database.php");

$username = "";
$password = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    $db = new db();
    $connection = $db->connection();

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";

    $result = $connection->query($sql);

    if($result->num_rows > 0)
    {
        echo "Admin Login Successful";
        header("Location: ../../view/admin_dashboard.php");
        exit();
    }
    else
    {
        echo "Invalid Admin Username or Password";
    }
}

?>
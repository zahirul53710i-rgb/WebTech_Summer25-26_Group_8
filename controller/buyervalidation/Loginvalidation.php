<?php

$nameErr = "";
$passwordErr = "";
$name = "";
$password = "";
$valid = true;


$default_username = "buyer";
$default_password = "buyer123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

   
    if (empty($name)) {
        $nameErr = "User Name is required";
        $valid = false;
    }

    if (empty($password)) {
        $passwordErr = "Password is required";
        $valid = false;
    }

   
    if ($valid) {
        if ($name === $default_username && $password === $default_password) {
            header("Location: buyerdashboard.php");
            exit();
        } else {
            $nameErr = "Invalid Username or Password!";
        }
    }
}
?>
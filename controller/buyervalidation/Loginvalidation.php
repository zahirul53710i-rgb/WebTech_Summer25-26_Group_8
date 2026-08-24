<?php

$nameErr = "";
$passwordErr = "";

$name = "";
$password = "";

$valid = true;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");


    if(empty($name) || strlen($name) < 5)
    {
        $nameErr = "User Name Must be at least 5 Character";
        $valid = false;
    }


    if(empty($password) || strlen($password) < 5)
    {
        $passwordErr = "Password Must be at least 5 Character";
        $valid = false;
    }


    if($valid)
    {
        header("Location: buyerdashboard.php");
        exit();
    }
}

?>
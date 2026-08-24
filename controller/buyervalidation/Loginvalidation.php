<?php
$nameErr = ""; 
$passwordErr = ""; 
$name = ""; 
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = trim($_POST["username"] ?? ""); 
    $password = trim($_POST["password"] ?? ""); 

    if (!empty($name) && strlen($name) >= 5) { 
        $nameErr = "User Name: " . $name; 
    } else { 
        $nameErr = "User Name Must be at least 5 Charectar"; 
    } 

    if (!empty($password) && strlen($password) >= 5) { 
        $passwordErr = "Password: " . $password; 
    } else { 
        $passwordErr = "Password Must be at least 5 Charectar"; 
    } 
}
?>
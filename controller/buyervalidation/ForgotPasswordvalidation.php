<?php
session_start();

$username = "";
$new_password = "";
$message = "";

$valid = true;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? "");
    $new_password = trim($_POST["new_password"] ?? "");

    if(empty($username) || strlen($username) < 5) {
        $message = "User Name Must be at least 5 Char";
        $valid = false;
    }

    if(empty($new_password) || strlen($new_password) < 5) {
        $message = "New Password Must be at least 5 Char";
        $valid = false;
    }

    if($valid) {
        $_SESSION["username"] = $username;
        $message = "Password Updated Successfully!";
    }
}
?>
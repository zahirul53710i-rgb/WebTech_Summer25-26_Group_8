<?php
session_start();

$name = "";
$password = "";
$message = "";
$remember = false;

if (isset($_COOKIE["remember_buyer"])) {
    $name = $_COOKIE["remember_buyer"];
    $remember = true;
}

$valid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $remember = isset($_POST["remember"]) && $_POST["remember"] === "1";

    if (empty($name) || strlen($name) < 5) {
        $message = "User Name Must be at least 5 Char";
        $valid = false;
    }

    if (empty($password) || strlen($password) < 5) {
        $message = "Password Must be at least 5 Char";
        $valid = false;
    }

    if ($valid) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $name;
        $message = "Session Created";

        if ($remember) {
            setcookie("remember_buyer", $name, time() + 86400 * 30, "/");
        } else {
            setcookie("remember_buyer", "", time() - 3600, "/");
        }

        header("Location: buyerdashboard.php");
        exit();
    }
}
?>
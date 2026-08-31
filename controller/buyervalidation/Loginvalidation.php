<?php
session_start();

// 'loginbd.php' এর জায়গায় 'logindb.php' হবে
//include __DIR__ . "/../../model/buyer/logindb.php";

$name = "";
$password = "";
$message = "";
$remember = false;

$nameErr = "";
$passwordErr = "";

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
        $nameErr = "User Name Must be at least 5 Char";
        $valid = false;
    }

    if (empty($password) || strlen($password) < 5) {
        $passwordErr = "Password Must be at least 5 Char";
        $valid = false;
    }

    if ($valid) {
        $mydb = new db();
        $conobj = $mydb->connection();
        
        $result = $mydb->login($conobj, "buyer_user", $name, $password);

        if ($result && $result->num_rows > 0) {
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $name;

            if ($remember) {
                setcookie("remember_buyer", $name, time() + 86400 * 30, "/");
            } else {
                setcookie("remember_buyer", "", time() - 3600, "/");
            }

            $conobj->close();
            header("Location: buyerdashboard.php");
            exit();
        } else {
            $message = "Invalid Username or Password!";
        }
        $conobj->close();
    }
}
?>
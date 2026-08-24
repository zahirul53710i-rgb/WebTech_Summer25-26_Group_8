<?php
session_start();
include "../Model/db.php"; 

$name = "";
$password = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $password = trim($_POST["password"] ?? "");

    $errors = [];

    if (empty($name) || strlen($name) < 5) {
        $errors[] = "User Name Must be at least 5 Char";
    }

    if (empty($password) || strlen($password) < 5) {
        $errors[] = "Password Must be at least 5 Char";
    }

    if (empty($errors)) {
        
        $checkUser = $conn->query("SELECT * FROM users WHERE LOWER(username) = LOWER('$name')");

        if ($checkUser && $checkUser->num_rows > 0) {
            $message = "Username is already taken. Choose another one.";
        } else {
            
            $sql = "INSERT INTO users (username, password) VALUES ('$name', '$password')";

            if ($conn->query($sql) === TRUE) {
                header("Location: ../View/login.php");
                exit();
            } else {
                $message = "Error: " . $conn->error;
            }
        }
    } else {
        $message = implode("<br>", $errors);
    }
}
?>
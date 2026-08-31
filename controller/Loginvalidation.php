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
 
    if (empty($name)) {
        $errors[] = "User Name is required.";
    }
 
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
 
    if (empty($errors)) {
        // OOP ক্লাসের মাধ্যমে কানেকশন তৈরি
        $database = new db();
        $conn = $database->connection();
 
        // স্যারের মেথড বা কুয়েরি দিয়ে লগইন যাচাই
        $result = $database->loginCheck($conn, "users", $name, $password);
 
        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION["username"] = $user["username"];
            
            $conn->close();
           
            header("Location: ../View/delivery_dashboard.php");
            exit();
        } else {
            $message = "Invalid Username or Password!";
        }
        $conn->close();
    } else {
        $message = implode("<br>", $errors);
    }
}
?>
 
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
        
        $database = new db();
        
 
        
        $checkUser = $database->CheckUser($conn, "users", $name);
 
        if ($checkUser && $checkUser->num_rows > 0) {
            $message = "Username is already taken. Choose another one.";
        } else {
          
            $insertQuery = $database->signup($conn, "users", $name, "", $password);
 
            if ($insertQuery === TRUE) {
                $conn->close();
                header("Location: ../View/login.php");
                exit();
            } else {
                $message = "Error inserting user.";
            }
        }
        $conn->close();
    } else {
        $message = implode("<br>", $errors);
    }
}
?>
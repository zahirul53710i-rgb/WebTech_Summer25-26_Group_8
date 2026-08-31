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

        

        $database = new db();

        $conn = $database->connection();

 

        

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
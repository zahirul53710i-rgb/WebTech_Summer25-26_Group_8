<?php

include "../model/buyer/registrationdb.php";

session_start();

$username = "";
$email = "";
$phone = "";
$address = "";
$dob = "";
$password = "";
$message = "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $dob = trim($_POST["dob"] ?? "");
    $password = trim($_POST["password"] ?? "123456");

    $file = $_FILES["file"] ?? [];

    if (empty($username) || strlen($username) < 5) {
        $message = "User Name Must be at least 5 Char";
        $valid = false;
    }

    if (empty($email) || strlen($email) < 5) {
        $message = "Email Must be at least 5 Char";
        $valid = false;
    }

    if (empty($phone) || strlen($phone) < 5) {
        $message = "Phone Number Must be at least 5 Char";
        $valid = false;
    }

    if (empty($address) || strlen($address) < 5) {
        $message = "Address Must be at least 5 Char";
        $valid = false;
    }

    if (empty($dob)) {
        $message = "Date of Birth is Required";
        $valid = false;
    }

    if ($valid) {

        $path = "";

        if (!empty($file["name"])) {

            $uploaddirectory = "../../Uploads/";

            if (!file_exists($uploaddirectory)) {
                mkdir($uploaddirectory, 0777, true);
            }

            $path = $uploaddirectory . basename($file["name"]);

            move_uploaded_file($file["tmp_name"], $path);
        }

        $database = new db();

        $connection = $database->connection();

        $result = $database->signup(
            $connection,
            "buyer_user",
            $username,
            $password,
            $email,
            $phone,
            $address,
            $dob,
            $path
        );

        if ($result) {

            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $username;

            header("Location: buyerdashboard.php");
            exit();

        } else {

            $message = "Database Error! Please try again.";
        }

        $connection->close();
    }
}
?>
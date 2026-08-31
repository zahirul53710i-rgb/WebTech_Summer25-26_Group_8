<?php
session_start();

$username = "";
$email = "";
$phone = "";
$address = "";
$dob = "";
$message = "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $dob = trim($_POST["dob"] ?? "");
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
            $uploaddirectory = "../Uploads/";
            
            if (!file_exists($uploaddirectory)) {
                mkdir($uploaddirectory, 0777, true);
            }

            $path = $uploaddirectory . basename($file["name"]);
            move_uploaded_file($file["tmp_name"], $path);
        }

       
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["address"] = $address;
        $_SESSION["dob"] = $dob;
        $_SESSION["profile_pic"] = $path;

       \
        setcookie("buyer_username", $username, time() + (86400 * 30), "/");
        setcookie("buyer_email", $email, time() + (86400 * 30), "/");
        setcookie("buyer_phone", $phone, time() + (86400 * 30), "/");
        setcookie("buyer_address", $address, time() + (86400 * 30), "/");
        setcookie("buyer_dob", $dob, time() + (86400 * 30), "/");
        setcookie("buyer_profile_pic", $path, time() + (86400 * 30), "/");

        $message = "Registration Successful";

        header("Location: buyerdashboard.php");
        exit();
    }
}
?>
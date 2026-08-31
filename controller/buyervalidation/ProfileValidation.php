<?php
session_start();

$name = "";
$email = "";
$phone = "";
$address = "";
$dob = "";
$message = "";
$photo = "../Images/profile.jpg";


if (isset($_COOKIE["buyer_name"])) {
    $name = $_COOKIE["buyer_name"];
}
if (isset($_COOKIE["buyer_email"])) {
    $email = $_COOKIE["buyer_email"];
}
if (isset($_COOKIE["buyer_phone"])) {
    $phone = $_COOKIE["buyer_phone"];
}
if (isset($_COOKIE["buyer_address"])) {
    $address = $_COOKIE["buyer_address"];
}
if (isset($_COOKIE["buyer_dob"])) {
    $dob = $_COOKIE["buyer_dob"];
}
if (isset($_COOKIE["buyer_profile_pic"]) && !empty($_COOKIE["buyer_profile_pic"])) {
    $photo = $_COOKIE["buyer_profile_pic"];
}

$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $dob = trim($_POST["dob"] ?? "");
    $file = $_FILES["file"] ?? [];

    if (empty($name) || strlen($name) < 5) {
        $message = "Name Must be at least 5 Char";
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
        
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["address"] = $address;
        $_SESSION["dob"] = $dob;

        $message = "Session Created";

      
        setcookie("buyer_name", $name, time() + (86400 * 30), "/");
        setcookie("buyer_email", $email, time() + (86400 * 30), "/");
        setcookie("buyer_phone", $phone, time() + (86400 * 30), "/");
        setcookie("buyer_address", $address, time() + (86400 * 30), "/");
        setcookie("buyer_dob", $dob, time() + (86400 * 30), "/");

       
        $jsonfile = "../Model/user.json";
        $users = [];
        if (file_exists($jsonfile)) {
            $jsonData = file_get_contents($jsonfile);
            $users = json_decode($jsonData, true) ?? [];

            $users[] = [
                'username'  => $name,
                'email'     => $email,
                'phone'     => $phone,
                'address'   => $address,
                'dob'       => $dob,
                'timestamp' => time()
            ];
            file_put_contents($jsonfile, json_encode($users, JSON_PRETTY_PRINT));
        }

        
        $path = "";
        if (!empty($file["name"])) {
            $uploaddirectory = "../Uploads/";
            
            if (!file_exists($uploaddirectory)) {
                mkdir($uploaddirectory, 0777, true);
            }

            $path = $uploaddirectory . basename($file["name"]);
            if (move_uploaded_file($file["tmp_name"], $path)) {
                $photo = $path;
                $_SESSION["profile_pic"] = $path;
                setcookie("buyer_profile_pic", $path, time() + (86400 * 30), "/");
            }
        }

        $message = "Profile Updated";
    }
}
?>
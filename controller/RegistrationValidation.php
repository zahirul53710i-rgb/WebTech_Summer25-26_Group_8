<?php
session_start();
 
$name = "";
$password = "";
$message = "";
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $file = $_FILES["file"] ?? null;
 
    $errors = [];
 
    if (empty($name) || strlen($name) < 5) {
        $errors[] = "User Name Must be at least 5 Char";
    }
 
    if (empty($password) || strlen($password) < 5) {
        $errors[] = "Password Must be at least 5 Char";
    }
 
    if (empty($errors)) {
        $jsonfile = "../Model/user.json";
        $users = [];
 
        if (file_exists($jsonfile)) {
            $jsonData = file_get_contents($jsonfile);
            $users = json_decode($jsonData, true) ?? [];
        }
 
        $userExists = false;
        foreach ($users as $existingUser) {
            if (isset($existingUser['username']) && strtolower($existingUser['username']) === strtolower($name)) {
                $userExists = true;
                break;
            }
        }
 
        if ($userExists) {
            $message = "Username is already taken. Choose another one.";
        } else {
            $filePath = "";
            if ($file && isset($file["error"]) && $file["error"] === UPLOAD_ERR_OK) {
                $uploadDir = "../Uploads/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = time() . "_" . basename($file["name"]);
                $filePath = $uploadDir . $fileName;
                move_uploaded_file($file["tmp_name"], $filePath);
            }
 
            $users[] = [
                'username'  => $name,
                'password'  => password_hash($password, PASSWORD_DEFAULT),
                'file'      => $filePath,
                'timestamp' => time()
            ];
 
            file_put_contents($jsonfile, json_encode($users, JSON_PRETTY_PRINT));
            header("Location: ../View/login.php");
            exit();
        }
    } else {
        $message = implode("<br>", $errors);
    }
}
?>
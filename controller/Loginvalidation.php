 
<?php
session_start();
 
$name = "";
$password = "";
$message = "";
$remember = false;
 
if (isset($_COOKIE["remember_user"])) {
    $name = $_COOKIE["remember_user"];
    $remember = true;
}
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $remember = isset($_POST["remember"]) && $_POST["remember"] === "1";
 
    $errors = [];
 
    if (empty($name) || strlen($name) < 5) {
        $errors[] = "User Name Should be at least 5 Char";
    }
 
    if (empty($password) || strlen($password) < 5) {
        $errors[] = "Password Must be at least 5 Char";
    }
 
    if (empty($errors)) {
        $jsonfile = "../Model/user.json";
        $authenticated = false;
 
        if (file_exists($jsonfile)) {
            $jsonData = file_get_contents($jsonfile);
            $users = json_decode($jsonData, true) ?? [];
 
            foreach ($users as $user) {
                if (isset($user['username'], $user['password']) && $user['username'] === $name) {
                    if (password_verify($password, $user['password'])) {
                        $authenticated = true;
                        break;
                    }
                }
            }
        }
 
        if ($authenticated) {
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $name;
 
            if ($remember) {
                setcookie("remember_user", $name, time() + (86400 * 30), "/");
            } else {
                setcookie("remember_user", "", time() - 3600, "/");
            }
 
            header("Location: ../View/delivery_dashboard.php");
            exit();
        } else {
            $message = "Invalid Username or Password!";
        }
    } else {
        $message = implode("<br>", $errors);
    }
}
?>
 
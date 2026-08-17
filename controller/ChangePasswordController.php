
<?php
session_start();
 
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: ../View/login.php");
    exit();
}
 
$message = "";
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $current_password = $_POST["current_password"] ?? "";
    $new_password = $_POST["new_password"] ?? "";
    $username = $_SESSION["username"];
 
    if (strlen($new_password) < 5) {
        $message = "New Password must be at least 5 characters long.";
    } else {
        $jsonfile = "../Model/user.json";
        if (file_exists($jsonfile)) {
            $users = json_decode(file_get_contents($jsonfile), true) ?? [];
            $updated = false;
 
            foreach ($users as &$user) {
                if ($user['username'] === $username) {
                    if (password_verify($current_password, $user['password'])) {
                        $user['password'] = password_hash($new_password, PASSWORD_DEFAULT);
                        $updated = true;
                        break;
                    } else {
                        $message = "Current Password is incorrect!";
                    }
                }
            }
 
            if ($updated) {
                file_put_contents($jsonfile, json_encode($users, JSON_PRETTY_PRINT));
                $message = "Password updated successfully!";
            }
        }
    }
}
?>
 
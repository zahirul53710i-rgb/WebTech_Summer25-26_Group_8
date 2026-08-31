<?php

include("../../model/database.php");

$currentPassword = "";
$newPassword = "";
$confirmPassword = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $currentPassword = trim($_POST["currentPassword"] ?? "");
    $newPassword = trim($_POST["newPassword"] ?? "");
    $confirmPassword = trim($_POST["confirmPassword"] ?? "");

    $db = new db();
    $connection = $db->connection();

    $sql = "SELECT * FROM admins WHERE username='admin' AND password='$currentPassword'";

    $result = $connection->query($sql);

    if($result->num_rows == 0)
    {
        echo "Invalid Current Password";
    }
    else if(empty($newPassword) || strlen($newPassword) < 5)
    {
        echo "New Password Must be at least 5 Characters";
    }
    else if($newPassword != $confirmPassword)
    {
        echo "New Password and Confirm Password do not match";
    }
    else
    {
        $sql = "UPDATE admins SET password='$newPassword' WHERE username='admin'";

        if($connection->query($sql))
        {
            echo "Password Changed Successfully";
        }
        else
        {
            echo "Password Change Failed";
        }
    }
}

?>
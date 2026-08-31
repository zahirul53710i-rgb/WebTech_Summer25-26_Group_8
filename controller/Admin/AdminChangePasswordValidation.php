<?php

$currentPassword="";
$newPassword="";
$confirmPassword="";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $currentPassword=trim($_POST["currentPassword"] ?? "");
        $newPassword=trim($_POST["newPassword"] ?? "");
        $confirmPassword=trim($_POST["confirmPassword"] ?? "");

        if($currentPassword != "admin")
            {
                echo "<script>alert('Invalid Current Password'); window.history.back();</script>";
            }
        else if(empty($newPassword) || strlen($newPassword) < 5)
            {
                echo "<script>alert('New Password Must be at least 5 Characters'); window.history.back();</script>";
            }
        else if($newPassword != $confirmPassword)
            {
                echo "<script>alert('New Password and Confirm Password do not match'); window.history.back();</script>";
            }
        else
            {
                echo "<script>alert('Password Validation Successful'); window.history.back();</script>";
            }
    }

?>

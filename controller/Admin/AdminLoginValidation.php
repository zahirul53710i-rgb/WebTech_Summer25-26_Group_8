<?php

$username="";
$password="";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username=trim($_POST["username"] ?? "");
        $password=trim($_POST["password"] ?? "");

        if($username != "admin")
            {
                echo "<script>alert('Invalid Admin Username'); window.history.back();</script>";
            }
        else if($password != "admin")
            {
                echo "<script>alert('Invalid Admin Password'); window.history.back();</script>";
            }
        else
            {
                echo "<script>alert('Admin Login Successful'); window.location.href='../../view/admin_dashboard.php';</script>";
            }
    }

?>

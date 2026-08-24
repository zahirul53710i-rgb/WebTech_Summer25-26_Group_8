<?php

$username="";
$email="";
$phone="";
$address="";
$dob="";
$message="";
$valid=true;

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username=trim($_POST["username"] ?? "");
        $email=trim($_POST["email"] ?? "");
        $phone=trim($_POST["phone"] ?? "");
        $address=trim($_POST["address"] ?? "");
        $dob=trim($_POST["dob"] ?? "");

        if(empty($username) || strlen($username)<5)
            {
                $message="User Name Must be at least 5 Char";
                $valid=false;
            }

        if(empty($email) || strlen($email)<5)
            {
                $message="Email Must be at least 5 Char";
                $valid=false;
            }

        if(empty($phone) || strlen($phone)<5)
            {
                $message="Phone Number Must be at least 5 Char";
                $valid=false;
            }

        if(empty($address) || strlen($address)<5)
            {
                $message="Address Must be at least 5 Char";
                $valid=false;
            }

        if(empty($dob))
            {
                $message="Date of Birth is Required";
                $valid=false;
            }

        if($valid)
            {
                $message="Registration Successful";
            }
    }

?>
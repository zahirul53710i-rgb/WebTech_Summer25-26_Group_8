<?php

$name="";
$email="";
$phone="";
$address="";
$dob="";
$username="";
$password="";
$confirm_password="";
$file="";

$valid=true;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=trim($_POST["name"] ?? "");
    $email=trim($_POST["email"] ?? "");
    $phone=trim($_POST["phone"] ?? "");
    $address=trim($_POST["address"] ?? "");
    $dob=trim($_POST["dob"] ?? "");
    $username=trim($_POST["username"] ?? "");
    $password=trim($_POST["password"] ?? "");
    $confirm_password=trim($_POST["confirm_password"] ?? "");

    if(isset($_FILES["file"]))
    {
        $file=$_FILES["file"]["name"];
    }


    if(empty($name) || strlen($name)<5)
    {
        $valid=false;
    }


    if(empty($email) || strlen($email)<5)
    {
        $valid=false;
    }


    if(empty($phone) || strlen($phone)<11)
    {
        $valid=false;
    }


    if(empty($address) || strlen($address)<5)
    {
        $valid=false;
    }


    if(empty($dob))
    {
        $valid=false;
    }


    if(empty($file))
    {
        $valid=false;
    }


    if(empty($username) || strlen($username)<5)
    {
        $valid=false;
    }


    if(empty($password) || strlen($password)<5)
    {
        $valid=false;
    }


    if(empty($confirm_password) || strlen($confirm_password)<5)
    {
        $valid=false;
    }


    if($password != $confirm_password)
    {
        $valid=false;
    }


    if($valid)
    {
        header("Location: ../../view/selller_login.php");
        exit();
    }
    else
    {
        echo "Registration validation failed.";
    }
}

?>
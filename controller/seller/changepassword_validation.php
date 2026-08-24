<?php

$username="";
$password="";

$valid=true;


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $username=trim($_POST["username"] ?? "");

    $password=trim($_POST["password"] ?? "");


    if(empty($username) || strlen($username)<5)
    {
        $valid=false;
    }


    if(empty($password) || strlen($password)<5)
    {
        $valid=false;
    }


    if($valid)
    {

        if($username == "seller")
        {
            echo "Password changed successfully.";
        }
        else
        {
            echo "Username does not exist.";
        }

    }
    else
    {
        echo "Change Password validation failed.";
    }

}

?>
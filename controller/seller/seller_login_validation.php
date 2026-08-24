<?php

$username="";
$password="";

$valid=true;


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $username=trim($_POST["name"] ?? "");

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

        /*
         * Temporary login validation
         *
         * Later this username and password
         * will be checked from the database.
         */

        if($username == "seller" && $password == "seller123")
        {

            header("Location: ../../view/sellerpage.php");

            exit();

        }
        else
        {

            echo "Invalid Username or Password.";

        }

    }
    else
    {

        echo "Login validation failed.";

    }

}

?>
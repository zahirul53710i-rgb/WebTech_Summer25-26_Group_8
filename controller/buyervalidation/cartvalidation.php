<?php

$quantity="";
$message="";

$valid=true;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $quantity = trim($_POST["quantity"] ?? "");

    if(empty($quantity))
    {
        $message="Quantity is Required";
        $valid=false;
    }

    else if(!is_numeric($quantity))
    {
        $message="Quantity Must be a Number";
        $valid=false;
    }

    else if($quantity <= 0)
    {
        $message="Quantity Must be Greater Than 0";
        $valid=false;
    }

    if($valid)
    {
        $message="Quantity: " . $quantity;
    }
}

?>
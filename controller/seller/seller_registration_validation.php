<?php

include "../../model/seller/seller_registration_db.php";

$name = "";
$email = "";
$phone = "";
$address = "";
$dob = "";
$username = "";
$password = "";
$confirm_password = "";
$message = "";

$valid = true;


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $dob = trim($_POST["dob"] ?? "");
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $confirm_password = trim($_POST["confirm_password"] ?? "");

    $file = $_FILES["file"] ?? [];


    // Name validation
    if (empty($name) || strlen($name) < 5)
    {
        $message = "Name must be at least 5 characters";
        $valid = false;
    }


    // Email validation
    if (empty($email) || strlen($email) < 5)
    {
        $message = "Email must be at least 5 characters";
        $valid = false;
    }


    // Phone validation
    if (empty($phone) || strlen($phone) < 11)
    {
        $message = "Phone number must be at least 11 characters";
        $valid = false;
    }


    // Address validation
    if (empty($address) || strlen($address) < 5)
    {
        $message = "Address must be at least 5 characters";
        $valid = false;
    }


    // DOB validation
    if (empty($dob))
    {
        $message = "Date of birth is required";
        $valid = false;
    }


    // Username validation
    if (empty($username) || strlen($username) < 5)
    {
        $message = "Username must be at least 5 characters";
        $valid = false;
    }


    // Password validation
    if (empty($password) || strlen($password) < 5)
    {
        $message = "Password must be at least 5 characters";
        $valid = false;
    }


    // Confirm password validation
    if (empty($confirm_password) || strlen($confirm_password) < 5)
    {
        $message = "Confirm password must be at least 5 characters";
        $valid = false;
    }


    // Password matching
    if ($password != $confirm_password)
    {
        $message = "Passwords do not match";
        $valid = false;
    }


    // Picture validation
    if (empty($file["name"]))
    {
        $message = "Please select a picture";
        $valid = false;
    }


    if ($valid)
    {
     

        
        $controller_folder = __DIR__;

       
        $project_folder = dirname(dirname($controller_folder));

        $uploaddirectory = $project_folder . "/view/assets/upload/";


      
        if (!is_dir($uploaddirectory))
        {
            mkdir($uploaddirectory, 0777, true);
        }


        
        if (!is_writable($uploaddirectory))
        {
            die("Upload folder is not writable: " . $uploaddirectory);
        }


        $path = "";


        if (isset($file["error"]) && $file["error"] == 0)
        {
            $filename = basename($file["name"]);

            $filepath = $uploaddirectory . $filename;


            if (move_uploaded_file($file["tmp_name"], $filepath))
            {
                
                $path = "assets/upload/" . $filename;
            }
            else
            {
                die("Picture upload failed.");
            }
        }
        else
        {
            die("File upload error. Error code: " . ($file["error"] ?? "unknown"));
        }


        
        $database = new db();

        $connection = $database->connection();


        

        $result = $database->sellerSignup(
            $connection,
            "registration",
            $name,
            $email,
            $phone,
            $address,
            $dob,
            $path,
            $username,
            $password
        );


        

        if ($result)
        {
            header("Location: ../../view/selller_login.php");
            exit();
        }
        else
        {
            echo "Database Error: " . $connection->error;
        }
    }
    else
    {
        echo $message;
    }
}

?>
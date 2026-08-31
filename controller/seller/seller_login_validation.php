<?php

session_start();

include "../../model/seller/seller_registration_db.php";


$username = "";
$password = "";

$valid = true;



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["name"] ?? "");
    $password = trim($_POST["password"] ?? "");


    

    if (empty($username) || strlen($username) < 5)
    {
        $valid = false;
    }


   
    if (empty($password) || strlen($password) < 5)
    {
        $valid = false;
    }


    
    if ($valid)
    {
        

        $database = new db();


        

        $connection = $database->connection();


        

        $result = $database->sellerLogin(
            $connection,
            "registration",
            $username,
            $password
        );


        

        if ($result && $result->num_rows > 0)
        {
            

            $seller = $result->fetch_assoc();


            

            $_SESSION["seller_logged_in"] = true;

            $_SESSION["seller_username"] = $seller["username"];

            $_SESSION["seller_id"] = $seller["id"];

            $_SESSION["seller_name"] = $seller["name"];

            $_SESSION["seller_email"] = $seller["email"];

            $_SESSION["seller_picture"] = $seller["picture"];


           

            if (isset($_POST["remember"]))
            {
                setcookie(
                    "seller_username",
                    $username,
                    time() + (86400 * 30),
                    "/"
                );

                setcookie(
                    "seller_remember",
                    "yes",
                    time() + (86400 * 30),
                    "/"
                );
            }
            else
            {
                setcookie(
                    "seller_username",
                    "",
                    time() - 3600,
                    "/"
                );

                setcookie(
                    "seller_remember",
                    "",
                    time() - 3600,
                    "/"
                );
            }


           

            header("Location: ../../view/sellerpage.php");
            exit();
        }
        else
        {
            

            echo "<script>
                    alert('Invalid Username or Password.');
                    window.history.back();
                  </script>";

            exit();
        }
    }
    else
    {
       

        echo "<script>
                alert('Username and Password must be at least 5 characters.');
                window.history.back();
              </script>";

        exit();
    }
}

?>
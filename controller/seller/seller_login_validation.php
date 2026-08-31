<?php

session_start();

include "../../model/seller/seller_registration_db.php";


$username = "";
$password = "";

$valid = true;


/*
 * Check POST request
 */

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["name"] ?? "");
    $password = trim($_POST["password"] ?? "");


    /*
     * Username validation
     */

    if (empty($username) || strlen($username) < 5)
    {
        $valid = false;
    }


    /*
     * Password validation
     */

    if (empty($password) || strlen($password) < 5)
    {
        $valid = false;
    }


    /*
     * Validation successful
     */

    if ($valid)
    {
        /*
         * Create database object
         */

        $database = new db();


        /*
         * Connect to database
         */

        $connection = $database->connection();


        /*
         * Check username and password
         */

        $result = $database->sellerLogin(
            $connection,
            "registration",
            $username,
            $password
        );


        /*
         * Check login result
         */

        if ($result && $result->num_rows > 0)
        {
            /*
             * Get seller information
             */

            $seller = $result->fetch_assoc();


            /*
             * Create session
             */

            $_SESSION["seller_logged_in"] = true;

            $_SESSION["seller_username"] = $seller["username"];

            $_SESSION["seller_id"] = $seller["id"];

            $_SESSION["seller_name"] = $seller["name"];

            $_SESSION["seller_email"] = $seller["email"];

            $_SESSION["seller_picture"] = $seller["picture"];


            /*
             * Remember Me
             */

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


            /*
             * Login successful
             */

            header("Location: ../../view/sellerpage.php");
            exit();
        }
        else
        {
            /*
             * Login failed
             */

            echo "<script>
                    alert('Invalid Username or Password.');
                    window.history.back();
                  </script>";

            exit();
        }
    }
    else
    {
        /*
         * Validation failed
         */

        echo "<script>
                alert('Username and Password must be at least 5 characters.');
                window.history.back();
              </script>";

        exit();
    }
}

?>
<?php

class db
{
    
    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "selleronly";

        $connection = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_name
        );

        if ($connection->connect_error)
        {
            die("Database connection failed: " . $connection->connect_error);
        }

        return $connection;
    }


   

    function sellerSignup(
        $connection,
        $tablename,
        $name,
        $email,
        $phone,
        $address,
        $dob,
        $picture,
        $username,
        $password
    )
    {
        $sql = "INSERT INTO " . $tablename .
               " (name, email, phone, address, dob, picture, username, password)
               VALUES (
                   '$name',
                   '$email',
                   '$phone',
                   '$address',
                   '$dob',
                   '$picture',
                   '$username',
                   '$password'
               )";

        $result = $connection->query($sql);

        return $result;
    }


    

    function sellerLogin(
        $connection,
        $tablename,
        $username,
        $password
    )
    {
        $sql = "SELECT * FROM " . $tablename .
               " WHERE username = '$username'
               AND password = '$password'";

        $result = $connection->query($sql);

        return $result;
    }
}

?>
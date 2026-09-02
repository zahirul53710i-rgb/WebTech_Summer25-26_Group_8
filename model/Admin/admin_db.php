<?php

class db
{
    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "haatbodol";

        $connection = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_name
        );

        if ($connection->connect_error)
        {
            die("Database Connection Failed: " . $connection->connect_error);
        }

        return $connection;
    }
}

?>
<?php
class db {
    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "haatbodol";
        
        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
        if ($connection->connect_error) {
            die("Please connect the Database");
        }
        return $connection;
    }

    function signup($connection, $tablename, $username, $password, $email, $phone, $address, $dob, $file)
    {
        $sql = "INSERT INTO ".$tablename." (username, password, email, phone, address, dob, file) VALUES ('".$username."', '".$password."', '".$email."', '".$phone."', '".$address."', '".$dob."', '".$file."')";
        $result = $connection->query($sql);
        return $result;
    }
}
?>
<?php
class db {
    
    
    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "haatbodoldb"; 
 
        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
        
        if ($connection->connect_error) {
            die("Please connect the Database: " . $connection->connect_error);
        }
        
        return $connection;
    }
 
    
    function signup($connection, $tablename, $username, $email, $password)
    {
        $sql = "INSERT INTO " . $tablename . " (username, email, password) VALUES ('" . $username . "', '" . $email . "', '" . $password . "')";
        $result = $connection->query($sql);
        return $result;
    }
 
  
    function loginCheck($connection, $tablename, $username, $password)
    {
        $sql = "SELECT * FROM " . $tablename . " WHERE username='" . $username . "' AND password='" . $password . "'";
        $result = $connection->query($sql);
        return $result;
    }
 
    
    function CheckUser($connection, $tablename, $username)
    {
        $sql = "SELECT * FROM " . $tablename . " WHERE username='" . $username . "'";
        $result = $connection->query($sql);
        return $result;
    }
 
   
    function getDeliveries($connection, $tablename)
    {
        $sql = "SELECT * FROM " . $tablename;
        $result = $connection->query($sql);
        return $result;
    }
}
?>
 
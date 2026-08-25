<?php
class db {
    
    // ডাটাবেজ কানেকশন তৈরি
    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "haatbodoldb"; // আপনার প্রজেক্টের ডাটাবেজ নেম
 
        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
        
        if ($connection->connect_error) {
            die("Please connect the Database: " . $connection->connect_error);
        }
        
        return $connection;
    }
 
    // ১. ইউজার সাইনআপ / রেজিস্ট্রেশন (users টেবিলের জন্য)
    function signup($connection, $tablename, $username, $email, $password)
    {
        $sql = "INSERT INTO " . $tablename . " (username, email, password) VALUES ('" . $username . "', '" . $email . "', '" . $password . "')";
        $result = $connection->query($sql);
        return $result;
    }
 
    // ২. লগইন চেক (ইউজারনেম ও পাসওয়ার্ড দিয়ে যাচাই)
    function loginCheck($connection, $tablename, $username, $password)
    {
        $sql = "SELECT * FROM " . $tablename . " WHERE username='" . $username . "' AND password='" . $password . "'";
        $result = $connection->query($sql);
        return $result;
    }
 
    // ৩. ইউজার ইউজারনেম চেক (AJAX দিয়ে ইউজারনেম অ্যাভেইলিবিলিটি বা ডুপ্লিকেট চেক করার জন্য)
    function CheckUser($connection, $tablename, $username)
    {
        $sql = "SELECT * FROM " . $tablename . " WHERE username='" . $username . "'";
        $result = $connection->query($sql);
        return $result;
    }
 
    // ৪. ডেলিভারি লগ বা অর্ডার ডেটা ফেচ করা (deliveries টেবিলের জন্য)
    function getDeliveries($connection, $tablename)
    {
        $sql = "SELECT * FROM " . $tablename;
        $result = $connection->query($sql);
        return $result;
    }
}
?>
 
<?php
include "../Model/db.php";
 
if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
 
    if (!empty($username)) {
        $mydb = new db();
        $conobj = $mydb->connection();
 
        $result = $mydb->CheckUser($conobj, "users", $username);
 
        if ($result && $result->num_rows > 0) {
            echo "<span style='color: red;'> Username Already Exists!</span>";
        } else {
            echo "<span style='color: green;'> Username Available!</span>";
        }
 
        $conobj->close();
    }
}
?>
 
<?php

include("model/database.php");

$db = new db();
$connection = $db->connection();

echo "Database connected successfully!";

?>
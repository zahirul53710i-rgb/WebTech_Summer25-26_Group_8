<?php

include("../../model/database.php");

$db = new db();
$connection = $db->connection();

$sql = "SELECT * FROM users";

$result = $connection->query($sql);

echo "Controller loaded";

?>
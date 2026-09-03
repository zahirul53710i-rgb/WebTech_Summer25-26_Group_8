<?php

include("../../model/database.php");

$db = new db();
$connection = $db->connection();

if(isset($_GET["action"]))
{
    if($_GET["action"] == "get_users")
    {
        $sql = "SELECT * FROM user";
        $result = $connection->query($sql);

        $users = array();

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                $users[] = $row;
            }

            echo json_encode([
                "status" => "success",
                "users" => $users
            ]);
        }
        else
        {
            echo json_encode([
                "status" => "error",
                "message" => "Could not fetch users"
            ]);
        }
    }
}

?>
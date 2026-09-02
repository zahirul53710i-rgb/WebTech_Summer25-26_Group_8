<?php

include "admin_auth.php";
include "../../model/Admin/admin_db.php";

header("Content-Type: application/json");

$action = $_GET["action"] ?? "";

$db = new db();
$connection = $db->connection();


if ($action == "test")
{
    echo json_encode([
        "status" => "success",
        "message" => "AJAX is working"
    ]);
}


else if ($action == "get_users")
{
    $sql = "SELECT id, username, email, role, phone, address, status
            FROM users";

    $result = $connection->query($sql);

    $users = array();

    if ($result)
    {
        while ($row = $result->fetch_assoc())
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
            "message" => "Failed to load users"
        ]);
    }
}


else
{
    echo json_encode([
        "status" => "error",
        "message" => "Invalid action"
    ]);
}


$connection->close();

?>
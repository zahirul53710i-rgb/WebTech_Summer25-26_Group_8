<?php

/*
 * AJAX Username Check Controller
 */


/*
 * Start output buffering so that
 * unexpected output does not break
 * the AJAX response.
 */
ob_start();


/*
 * Your actual project uses lowercase
 * model folder.
 */
include "../model/db.php";


/*
 * Get username sent by AJAX.
 */
$username =
    trim($_POST["username"] ?? "");


/*
 * If username is empty.
 */
if ($username === "")
{
    echo
        "<span style='color: red;'>
            Username Required
        </span>";

    exit();
}


/*
 * Create database object.
 */
$database =
    new db();


/*
 * Create database connection.
 */
$connection =
    $database->connection();


/*
 * Check whether username already
 * exists in users table.
 */
$result =
    $database->CheckUser(
        $connection,
        "users",
        $username
    );


/*
 * Return AJAX response.
 */
if (
    $result &&
    $result->num_rows > 0
)
{
    echo
        "<span style='color: red;'>
            Username Already Taken!
        </span>";
}
else
{
    echo
        "<span style='color: green;'>
            Username Available!
        </span>";
}


/*
 * Close database connection.
 */
$connection->close();

?>
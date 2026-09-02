<?php

session_start();

$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($username != "admin")
    {
        echo "<script>
                alert('Invalid Admin Username');
                window.history.back();
              </script>";
        exit();
    }

    if ($password != "admin")
    {
        echo "<script>
                alert('Invalid Admin Password');
                window.history.back();
              </script>";
        exit();
    }

    session_regenerate_id(true);

    $_SESSION["admin_logged_in"] = true;
    $_SESSION["admin_username"] = $username;

    /*
       Cookie is only used to remember the username.
       The session is still required for authentication.
    */
    if (isset($_POST["remember"]))
    {
        setcookie(
            "admin_username",
            $username,
            time() + (86400 * 30),
            "/"
        );
    }
    else
    {
        setcookie(
            "admin_username",
            "",
            time() - 3600,
            "/"
        );
    }

    echo "<script>
            alert('Admin Login Successful');
            window.location.href='../../view/admin_dashboard.php';
          </script>";

    exit();
}

?>
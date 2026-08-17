<?php
// include __DIR__ . "/../Controller/sellerController.php";
?>

<!DOCTYPE html>
<html>

<head>

    <title>Seller Dashboard</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f3ef;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */

        .sidebar {
            width: 270px;
            min-height: 100vh;

            background: linear-gradient(180deg, #3d5a40, #263b2a);

            display: flex;
            flex-direction: column;
        }

        .menu-button {
            width: 100%;
            height: 75px;

            border: none;
            border-bottom: 1px solid rgba(255,255,255,0.15);

            background-color: transparent;

            color: white;

            font-size: 17px;
            text-align: left;

            padding-left: 40px;

            cursor: pointer;
        }

        .menu-button:hover {
            background-color: #536f57;
        }

        .menu-button.active {
            background-color: #536f57;
        }

        /* Logout */

        .logout {
            margin-top: auto;
            padding: 25px;
        }

        .logout-button {
            width: 100%;
            height: 45px;

            border: none;
            border-radius: 7px;

            background-color: #c0392b;

            color: white;

            font-size: 16px;

            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #a93226;
        }

        /* Main */

        .main {
            flex: 1;
            padding: 25px;
        }

        .title {
            height: 100px;

            background: linear-gradient(135deg, #3d5a40, #718c72);

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 15px;

            color: white;
        }

        .title h1 {
            font-size: 30px;
            font-weight: normal;
        }

        /* Welcome */

        .welcome {
            background-color: white;

            border-radius: 12px;

            padding: 20px;

            margin-bottom: 15px;

            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .welcome h2 {
            color: #3d5a40;

            font-size: 19px;

            margin-bottom: 5px;
        }

        .welcome p {
            color: #666;

            font-size: 16px;
        }

        /* Content */

        .content {
            min-height: 600px;

            background-color: white;

            border-radius: 12px;

            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

    </style>

</head>


<body>

<form method="post" action="">

    <div class="dashboard">


        <div class="sidebar">


            <input
                type="submit"
                name="page"
                value="My Products"
                class="menu-button active"
            >


            <input
                type="submit"
                name="page"
                value="Add/Remove products"
                class="menu-button"
            >


            <input
                type="submit"
                name="page"
                value="Orders"
                class="menu-button"
            >


            <input
                type="submit"
                name="page"
                value="Payouts"
                class="menu-button"
            >


            <input
                type="submit"
                name="page"
                value="Change password"
                class="menu-button"
            >


            <div class="logout">

                <input
                    type="submit"
                    name="page"
                    value="Logout"
                    class="logout-button"
                >

            </div>


        </div>


        <div class="main">


            <div class="title">

                <h1>Seller Dashboard</h1>

            </div>


            <div class="welcome">

                <h2>Welcome back, Seller! 👋</h2>

                <p>
                    Manage your products, track your orders,
                    and grow your business from one place.
                </p>

            </div>


            <div class="content">

            </div>


        </div>

    </div>

</form>

</body>

</html>
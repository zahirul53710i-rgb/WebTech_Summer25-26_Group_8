<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Seller Dashboard</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f1e8;
            color: #26332d;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

      

        .dashboard {
            display: flex;
            min-height: 100vh;
        }



        .sidebar {
            width: 250px;
            min-height: 100vh;

            background-color: #263f35;
            color: white;

            display: flex;
            flex-direction: column;
        }


        .sidebar-header {
            padding: 25px 20px;

            border-bottom:
                1px solid
                rgba(255,255,255,0.15);
        }


        .sidebar-header h2 {
            font-family: Georgia, serif;

            font-size: 25px;

            font-weight: normal;
        }


        .sidebar-header p {
            color: #d8dfd8;

            font-size: 12px;

            margin-top: 3px;
        }


     

        .menu {
            padding-top: 15px;
        }


        .menu-button {
            display: block;

            width: 100%;

            padding: 15px 25px;

            color: #d8dfd8;

            font-size: 14px;

            border-left:
                4px solid
                transparent;

            transition: 0.2s;
        }


        .menu-button:hover,
        .menu-button.active {

            background-color: #3d5b4d;

            color: white;

            border-left-color: #d4a84f;
        }




        .logout {

            margin-top: auto;

            padding: 20px;
        }


        .logout-button {

            display: block;

            width: 100%;

            background-color: #a85c4a;

            color: white;

            padding: 10px;

            border-radius: 6px;

            text-align: center;

            font-size: 14px;
        }


        .logout-button:hover {

            background-color: #8d493a;
        }


        

        .main {

            flex: 1;

            padding: 30px;
        }


        .admin-header {

            margin-top: 0;

            background-color: #263f35;

            color: white;

            padding: 30px;

            border-radius: 12px;
        }


        .admin-header h1 {

            font-family: Georgia, serif;

            font-size: 32px;

            font-weight: normal;

            margin-bottom: 5px;
        }


        .admin-header p {

            color: #d8dfd8;
        }


        .welcome {

            margin-top: 20px;

            background-color: #fffdf8;

            padding: 25px;

            border:
                1px solid
                #ddd5c5;

            border-radius: 12px;

            box-shadow:
                0 4px 10px
                rgba(50, 45, 35, 0.07);
        }


        .welcome h2 {

            font-family: Georgia, serif;

            font-size: 24px;

            font-weight: normal;

            color: #263f35;

            margin-bottom: 7px;
        }


        .welcome p {

            color: #62665e;

            font-size: 14px;
        }


        .content {

            margin-top: 20px;

            min-height: 400px;

            background-color: #fffdf8;

            border:
                1px solid
                #ddd5c5;

            border-radius: 12px;

            box-shadow:
                0 4px 10px
                rgba(50, 45, 35, 0.07);
        }



        @media screen and (max-width: 700px) {

            .dashboard {

                display: block;
            }


            .sidebar {

                width: 100%;

                min-height: auto;
            }


            .menu {

                display: flex;

                flex-wrap: wrap;
            }


            .menu-button {

                width: 50%;
            }


            .logout {

                margin-top: 0;
            }


            .main {

                padding: 20px;
            }

        }

    </style>

</head>


<body>


<div class="dashboard">


    <div class="sidebar">


        <!-- Sidebar Header -->

        <div class="sidebar-header">

            <h2>
                HaatBodol
            </h2>

            <p>
                Seller Panel
            </p>

        </div>


        <div class="menu">


       

            <a
                href="sellerpage.php"
                class="menu-button active"
            >
                Dashboard
            </a>


       

            <a
                href="addremoveproduct.php"
                class="menu-button"
            >
                Add/Remove Product
            </a>


            <a
                href="order.php"
                class="menu-button"
            >
                Orders
            </a>


       

            <a
                href="payouts.php"
                class="menu-button"
            >
                Payouts
            </a>


    
            <a
                href="changepassword.php"
                class="menu-button"
            >
                Change Password
            </a>


        </div>



        <div class="logout">

            <a
                href="dashboard.php"
                class="logout-button"
            >
                Logout
            </a>

        </div>


    </div>



    <div class="main">


        <!-- Header -->

        <div class="admin-header">

            <h1>
                Seller Dashboard
            </h1>

            <p>
                Manage your products, orders and earnings
                from one place.
            </p>

        </div>


        <!-- Welcome -->

        <div class="welcome">

            <h2>
                Welcome back, Seller! 👋
            </h2>

            <p>
                Manage your products, track your orders,
                and grow your business from one place.
            </p>

        </div>


        <div class="content">

        </div>


    </div>


</div>


</body>

</html>
```

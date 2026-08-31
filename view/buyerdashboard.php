<?php

session_start();


if (!isset($_SESSION["username"]) && isset($_COOKIE["user_login"])) {
    $_SESSION["username"] = $_COOKIE["user_login"];
}


if (!isset($_SESSION["username"])) {
    header("Location: userlogin.php");
    exit();
}

include "../Controller/Buyervalidation/buyerdashboardvalidation.php";
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Buyer Dashboard</title>


    <script>

        function collect_data()
        {
            let quantity = document.getElementById("quantity").value.trim();

            let valid = true;
            let message="";


            if(quantity.length == 0)
            {
                message+="Quantity is Required\n";
                valid=false;
            }

            else if(isNaN(quantity))
            {
                message+="Quantity Must be a Number\n";
                valid=false;
            }

            else if(Number(quantity) <= 0)
            {
                message+="Quantity Must be Greater Than 0\n";
                valid=false;
            }


            if(!valid)
            {
                alert(message);
            }


            return valid;
        }

    </script>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f0ea;
            color: #2c4238;
            padding: 20px;
            line-height: 1.6;
        }


        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }


        h1 {
            font-family: Georgia, serif;
            font-size: 30px;
            font-weight: normal;
            color: #2c4238;
            text-align: center;
            margin-bottom: 10px;
        }


        .welcome {
            text-align: center;
            color: #4d6b5e;
            margin-bottom: 25px;
        }


        fieldset {
            width: 100%;
            border: 1px solid #e2ddd3;
            border-radius: 8px;
            padding: 22px;
            background-color: #ffffff;
        }


        legend {
            padding: 0 10px;
            color: #2c4238;
            font-weight: bold;
            font-size: 18px;
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }


        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e2ddd3;
        }


        tr:first-child td {
            background-color: #4d6b5e;
            color: white;
            font-weight: bold;
        }


        tr:nth-child(even) {
            background-color: #fbf9f5;
        }


        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #e2ddd3;
            border-radius: 8px;
            background-color: #eeebe3;
            color: #2c4238;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }


        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #4d6b5e;
        }


        input[type="submit"],
        input[type="button"] {
            background-color: #4d6b5e;
            color: white;
            padding: 12px 18px;
            width: 100%;
            border-radius: 8px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            margin-top: 5px;
        }


        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #3c5449;
        }


        .message {
            text-align: center;
            color: #2c4238;
            font-weight: bold;
            padding: 10px;
        }


        .link {
            text-align: center;
            margin-top: 20px;
        }


        .link a {
            color: #4d6b5e;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            margin: 0 15px;
        }


        .link a:hover {
            color: #2c4238;
            text-decoration: underline;
        }


        @media screen and (max-width: 700px) {

            body {
                padding: 10px;
            }

            .container {
                width: 100%;
                margin: 30px auto;
                padding: 20px;
            }

            fieldset {
                padding: 15px;
            }

            h1 {
                font-size: 26px;
            }

        }

    </style>

</head>


<body>


    <div class="container">


        <h1>Buyer Dashboard</h1>


        <div class="welcome">
          
            Welcome back, <?php echo isset($_SESSION["username"]) ? htmlspecialchars($_SESSION["username"]) : "Buyer"; ?>!
        </div>


        <form method="post" action="" onsubmit="return collect_data()">


            <fieldset>


                <legend>Available Products</legend>


                <table>


                    <tr>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Available Quantity</td>
                        <td>Buy</td>
                    </tr>


                    <tr>

                        <td>Medicine A</td>

                        <td>500 BDT</td>

                        <td>20</td>

                        <td>

                            <input type="hidden"
                                   name="product"
                                   value="Medicine A">

                            <input type="number"
                                   id="quantity"
                                   name="quantity"
                                   placeholder="Quantity"
                                   min="1">

                            <br>

                            <?php echo isset($message) ? $message : ""; ?>

                            <input type="submit"
                                   id="submit"
                                   name="submit"
                                   value="Buy">

                        </td>

                    </tr>


                    <tr>

                        <td>Medicine B</td>

                        <td>750 BDT</td>

                        <td>15</td>

                        <td>

                            <input type="button"
                                   value="Buy"
                                   onclick="location.href='cart.php'">

                        </td>

                    </tr>


                    <tr>

                        <td>Medicine C</td>

                        <td>350 BDT</td>

                        <td>30</td>

                        <td>

                            <input type="button"
                                   value="Buy"
                                   onclick="location.href='cart.php'">

                        </td>

                    </tr>


                </table>


                <div class="link">

                    <a href="buyer_profile_view_update.php">
                        My Profile
                    </a>

                    <a href="cart.php">
                        My Cart
                    </a>

                    <a href="order_history.php">
                        Order History
                    </a>

                </div>


                <div class="link">

                    <a href="review.php">
                        Give Review
                    </a>

                  
                    <a href="userlogin.php">
                        Logout
                    </a>

                </div>


            </fieldset>


        </form>


    </div>


</body>

</html>
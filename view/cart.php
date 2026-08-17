<?php
// PHP code can be added here later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Buyer Cart</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: bisque;
            padding: 20px;
            line-height: 1.5;
        }

        .container{
            max-width: 850px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 20px 20px;
        }

        h1{
            color: blue;
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
        }

        fieldset{
            border-radius: 25px;
            padding: 20px;
            background-color: cornsilk;
        }

        legend{
            padding: 0 10px;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th{
            background-color: blue;
            color: white;
            padding: 12px;
            text-align: center;
        }

        td{
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        .total{
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            padding: 20px 10px;
        }

        input[type="button"],
        input[type="submit"]{
            background-color: red;
            color: white;
            padding: 12px 15px;
            width: 100%;
            border-radius: 10px;
            border: none;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="button"]:hover{
            background-color: green;
        }

        input[type="submit"]:hover{
            background-color: black;
        }

        .link{
            text-align: center;
            margin-top: 20px;
        }

        .link a{
            color: blue;
            text-decoration: none;
            font-size: 17px;
        }

        .link a:hover{
            text-decoration: underline;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>My Cart</h1>

        <fieldset>

            <legend>Selected Products</legend>

            <table>

                <tr>

                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>

                </tr>

                <!-- Products will be added here later -->

                <tr>

                    <td colspan="4">
                        
                    </td>

                </tr>

                <tr>

                    <td colspan="3" class="total">
                        Grand Total:
                    </td>

                    <td>
                        
                    </td>

                </tr>

                <tr>

                    <td colspan="2">

                        <input type="button"
                               value="Continue Shopping"
                               onclick="location.href='buyer_profile_view_update.php'">

                    </td>

                    <td colspan="2">

                        <input type="submit"
                               value="Place Order">

                    </td>

                </tr>

            </table>

            <div class="link">

                <a href="order_history.php">
                    View Order History
                </a>

            </div>

        </fieldset>

    </div>

</body>

</html>
<?php
// PHP code can be added here later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Buyer Cart</title>


    <script>

        function collect_data()
        {
            let quantity = document.getElementById("quantity").value.trim();

            let valid = true;
            let message="";


            if(quantity.length == 0)
            {
                message+="Quantity is Required\n";
                valid = false;
            }


            if(quantity <= 0 && quantity.length > 0)
            {
                message+="Quantity Must be Greater Than 0\n";
                valid = false;
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
            line-height: 1.5;
        }


        .container {
            max-width: 850px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }


        h1 {
            color: #2c4238;
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
            font-family: Georgia, serif;
        }


        fieldset {
            border: 1px solid #e2ddd3;
            border-radius: 12px;
            padding: 20px;
            background-color: #ffffff;
        }


        legend {
            padding: 0 10px;
            color: #2c4238;
            font-weight: bold;
            font-size: 20px;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }


        th {
            background-color: #3f5e4d;
            color: white;
            padding: 12px;
            text-align: center;
            font-size: 15px;
        }


        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e2ddd3;
            color: #2c4238;
            font-size: 15px;
        }


        tr:nth-child(even) {
            background-color: #fbf9f5;
        }


        .total {
            text-align: right;
            font-size: 17px;
            font-weight: bold;
            padding: 20px 10px;
            color: #2c4238;
        }


        input[type="text"],
        input[type="button"],
        input[type="submit"] {
            background-color: #3f5e4d;
            color: white;
            padding: 12px 15px;
            width: 100%;
            border-radius: 8px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }


        input[type="text"] {
            background-color: #eeebe3;
            color: #2c4238;
            border: 1px solid #e2ddd3;
            cursor: text;
        }


        input[type="text"]:focus {
            outline: none;
            border-color: #4d6b5e;
        }


        input[type="button"] {
            background-color: #e2ddd3;
            color: #2c4238;
        }


        input[type="button"]:hover {
            background-color: #d1cbbd;
        }


        input[type="submit"]:hover {
            background-color: #2c4238;
        }


        .link {
            text-align: center;
            margin-top: 20px;
        }


        .link a {
            color: #3f5e4d;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
        }


        .link a:hover {
            color: #2c4238;
            text-decoration: underline;
        }

    </style>

</head>


<body>


    <div class="container">


        <h1>My Cart</h1>


        <form method="post" action="" onsubmit="return collect_data()">


            <fieldset>


                <legend>Selected Products</legend>


                <table>


                    <thead>

                        <tr><th>Product</th><th>Quantity</th><th>Price</th><th>Total</th></tr>

                    </thead>


                    <tbody>


                        <tr><td>Selected Product</td><td><input type="text" id="quantity" name="quantity" placeholder="Enter Quantity"></td><td></td><td></td></tr>


                        <tr><td colspan="3" class="total">Grand Total:</td><td></td></tr>


                        <tr><td colspan="2"><input type="button" value="Continue Shopping" onclick="location.href='dashboard.php'"></td><td colspan="2"><input type="submit" id="submit" name="submit" value="Place Order"></td></tr>


                    </tbody>


                </table>


                <div class="link"><a href="order_history.php">View Order History</a></div>


            </fieldset>


        </form>


    </div>


</body>

</html>
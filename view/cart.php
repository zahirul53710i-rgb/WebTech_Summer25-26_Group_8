<?php
include "../Controller/buyervalidation/cartvalidation.php";
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Buyer Cart</title>

    <script>
        function collect_data() {
            let quantity = document.getElementById("quantity").value.trim();
            let valid = true;
            let message = "";

            if (quantity.length == 0) {
                message += "Quantity is Required\n";
                valid = false;
            } else if (isNaN(quantity)) {
                message += "Quantity Must be a Number\n";
                valid = false;
            } else if (Number(quantity) <= 0) {
                message += "Quantity Must be Greater Than 0\n";
                valid = false;
            }

            if (!valid) {
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* --- Header & Topnav Styling --- */
        .header {
            background-color: #2c4238;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            font-family: Georgia, serif;
            font-size: 24px;
        }

        .topnav {
            background-color: #3f5e4d;
            padding: 10px;
            text-align: center;
        }

        .topnav a {
            color: #e2ddd3;
            text-decoration: none;
            margin: 0 15px;
            font-size: 15px;
            font-weight: bold;
        }

        .topnav a:hover {
            color: #ffffff;
        }

        /* --- Main Content Container --- */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        .container {
            max-width: 650px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #e2ddd3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        fieldset {
            border: 1px solid #e2ddd3;
            border-radius: 8px;
            padding: 20px;
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
            padding: 10px;
            vertical-align: middle;
        }

        td label {
            font-weight: bold;
            color: #2c4238;
        }

        .product-info {
            background-color: #fbf9f5;
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #e2ddd3;
            font-weight: bold;
            color: #3f5e4d;
            display: inline-block;
            width: 100%;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .total-box {
            text-align: right;
            font-size: 16px;
            font-weight: bold;
            margin-top: 15px;
            color: #2c4238;
            border-top: 1px dashed #e2ddd3;
            padding-top: 15px;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        input[type="button"],
        input[type="submit"] {
            flex: 1;
            padding: 10px;
            border-radius: 6px;
            border: none;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        input[type="button"] {
            background-color: #e2ddd3;
            color: #2c4238;
        }

        input[type="submit"] {
            background-color: #3f5e4d;
            color: white;
        }

        .error-msg {
            color: #c0392b;
            font-weight: bold;
            font-size: 13px;
            margin-top: 4px;
            display: block;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: #3f5e4d;
            text-decoration: none;
            font-weight: bold;
        }

        /* --- Footer Styling --- */
        .footer {
            background-color: #2c4238;
            color: #e2ddd3;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }

        .footer label {
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <div class="header">
        <h1>Green Harvest Portal</h1>
    </div>

    <!-- Top Navigation -->
    <div class="topnav">
        <a href="dashboard.php">Dashboard</a>
        <a href="buyer_profile_view_update.php">Profile</a>
        <a href="cart.php">Cart</a>
        <a href="userlogin.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">

            <form method="post" action="" onsubmit="return collect_data()">

                <fieldset>
                    <legend>My Cart - Selected Products</legend>

                    <table>
                        <tr>
                            <td><label>Product Name:</label></td>
                            <td><div class="product-info"><?php echo $product_name; ?></div></td>
                        </tr>

                        <tr>
                            <td><label>Price Per Unit:</label></td>
                            <td><div class="product-info">BDT <?php echo $price; ?></div></td>
                        </tr>

                        <tr>
                            <td><label for="quantity">Quantity:</label></td>
                            <td>
                                <input type="text" id="quantity" name="quantity" placeholder="Enter Quantity" value="<?php echo $quantity; ?>">
                                <span class="error-msg"><?php echo $message; ?></span>
                            </td>
                        </tr>
                    </table>

                    <div class="total-box">
                        Grand Total: BDT <span id="grand-total"><?php echo $total; ?></span>
                    </div>

                    <div class="btn-group">
                        <input type="button" value="Continue Shopping" onclick="location.href='dashboard.php'">
                        <input type="submit" id="submit" name="submit" value="Place Order">
                    </div>

                    <div class="link">
                        <a href="order_history.php">View Order History</a>
                    </div>

                </fieldset>

            </form>

        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <label for="footer">Created <?php echo date("Y"); ?> - Green Harvest Portal</label>
    </div>

</body>

</html>
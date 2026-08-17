<?php
// PHP code can be added here later
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Order History</title>

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
            border-radius: 30px;
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

      td
      {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ccc;
        }

        input[type="button"]{
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

        .link{
            text-align: center;
            margin-top: 20px;
        }

        .link a{
              color: blue;
              text-decoration: none;
              font-size: 17px;
              margin: 0 20px;
             }

        .link a:hover{
            text-decoration: underline;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>Order History</h1>

        <fieldset>

            <legend>My Previous Orders</legend>

            <table>

    <tr>
        <td>Order ID</td>
        <td>Product</td>
        <td>Date</td>
        <td>Amount</td>
        <td>Status</td>
    </tr>

         </table>
            <div class="link">

                <a href="buyer_cart.php">
                    Go to Cart
                </a>

                <a href="userlogin.php">
                    Back to Profile
                </a>
                
               
              <a href="review.php">
                Give Review
                </a>

            </div>

        </fieldset>

    </div>

</body>

</html>